<?php

require "config.php";

function mysqli_prep($string)
{
	global $conn;
	$safe_string = mysqli_real_escape_string($conn, $string);
	echo $safe_string;
}

function form_errors($errors=array())
{
	$output = "";
	if (!empty($errors)) {
		$output .= "<div class=\"alert alert-danger alert-dismissible fade show card col-md-12 \">";
		$output .= "Please fix the following errors:";
		$output .= "<ul>";
		foreach ($errors as $key => $error) {
			$output .= "<li>" . htmlentities($error) . "</li>";
		}
		$output .= "</ul>";
		$output .= "</div>";
	}
	return $output;
}

//Add 's' to text to indicate plural
function plural($text,$cnt){
	$ret = $text;
	if ($cnt == 1) {
		return $ret;
	}elseif ($cnt>1) {
		return $text.'s';
	}else{
		return $text.'s';
	}
}

function timeago($date) {
	   $timestamp = strtotime($date);	
	   
	   $strTime = array("second", "minute", "hour", "day", "month", "year");
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
			$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return $diff . " " .plural( $strTime[$i],$diff)." ago ";
	   }
	}


function auth_user($e,$p){
	return true;
}



?>
<?php

    // Set Session Message
    function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['Message'] = $msg;
        }
        else
        {
            $msg = "";
        }
    }

   // Display Session Message
   function display_message()
   {
       if(isset($_SESSION['Message']))
       {
           echo $_SESSION['Message'];
           unset($_SESSION['Message']);
       }
   }


   // Error Display
   function Error_Display($Error)
   {
       return '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$Error.'</div>';
   }


   // Token Generator
   function token_generator()
   {
       $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
       return $token;
   }


   // Function Email Exists
   function Email_Exist($Email)
   {
       global $conn;
       $query = "select * from users where Email='$Email'";
       $result = mysqli_query($conn,$query);

       if(mysqli_fetch_assoc($result))
       {
           return true;
       }
       else
       {
           return false;
       }
   }

   // Function User Exists
   function User_Exists($User)
   {
       global $conn;
       $query = "SELECT * FROM users where UserName='$User'";
       $result = mysqli_query($conn,$query);

       if(mysqli_fetch_assoc($result))
       {
           return true;
       }
       else
       {
           return false;
       }
   }


   // Send Email Function
   function Send_Email($Email,$Subject,$Msg,$Header)
   {
       return mail($Email,$Subject,$Msg,$Header);
   }


   // Form Validation Function
   function form_validation()
   {
       if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn_signup']))
       {
           $FirstName = $_POST['FName'];
           $LastName = $_POST['LName'];
           $UserName = $_POST['UName'];
           $Email = $_POST['Email'];
           $Password = $_POST['password'];
           $CPassword = $_POST['cpassword'];

           $Errors=[];

           // Check Empty Fields
           if(empty($FirstName) || empty($LastName) || empty($UserName) || empty($Email) || empty($Password) || empty($CPassword))
           {
                $Errors[] = "Please Fill in the Blanks ";
           }

           // Check User Name Characters
           if(!preg_match("/^[A-Za-z,0-9]*$/",$UserName))
           {
                 $Errors[] = " User Name Cannot Accept Those Characters please Try Again ";
           }

           // Check Email Exists
           if(Email_Exist($Email))
           {
                $Errors[] = " Email Already Exists :) ";
           }

           // Check User Exist
           if(User_Exists($UserName))
           {
                $Errors[] = " User Name Already Exists :) ";
           }

           // Password Checking
           if($Password!=$CPassword)
           {
            $Errors[] = " Password Not Matched :) ";
           }

           if(!empty($Errors))
           {
               foreach($Errors as $display)
               {
                    echo Error_Display($display);
               }
           }
           else
           {

               if(user_registration($FirstName,$LastName,$UserName,$Email,$Password))
               {
                    echo '<div class="alert alert-success"> You Have Successfully Registered Please Check Your Email : )</div>';
               }
               else
               {
                   Error_Display(" Your Account Not Registered Please Try Again ! ");
               }
           }

       }
   } // Closing Form Validation Function


   /*************** User Registration Function********************///

   function user_registration($First,$Last,$User,$Email,$Password)
   {
        global $conn;
        $FirstName = mysqli_real_escape_string($conn,$First);
        $LastName = mysqli_real_escape_string($conn,$Last);
        $UserName = mysqli_real_escape_string($conn,$User);
        $Email = mysqli_real_escape_string($conn,$Email);
        $Password = mysqli_real_escape_string($conn,$Password);

        $Pass = md5($Password);
        $Validation_Code = md5($UserName.microtime());

        $filename = './JS/main.js';
        $filename2 = './JS/jQuery.js';

        if (file_exists($filename) && file_exists($filename2)) {
          $sql = "INSERT INTO users (f_name,l_name,usermane,email,password,validation_code,status) values ('$FirstName','$LastName','$UserName','$Email','$Pass','$Validation_Code','0')";
          $result = mysqli_query($conn,$sql);
        }
        else {
            header("location:".$_SERVER['HTTP_REFERER']);
        }

        $Subject = " Please Activate Your Account ";
        $Msg = " Please Active Your Account to Click the Link Below : localhost/MyApp/Activate.php?Email=$Email&Code=$Validation_Code";
        $Header = "no-reply@africanstrokeorganization.com";

        Send_Email($Email,$Subject,$Msg,$Header);
        return true;
   }


   // Function Activation Account

   function activate()
   {
       if(isset($_GET['Email']) && isset($_GET['Code']))
       {
           global $conn;
           $Email = $_GET['Email'];
           $Code = $_GET['Code'];

           $query = "SELECT * FROM users WHERE email='$Email' AND validation_code='$Code'";
           $result = mysqli_query($conn,$query);

           if(mysqli_fetch_assoc($result))
           {
               $up_query = "UPDATE users set status='1', validation_code='0' WHERE email='$Email' AND validation_code='$Code'";
               $up_result = mysqli_query($conn,$up_query);
               echo '<div class="alert alert-success"> Your Account Has Been Activated :)<a href="login.php">Click Here to Login</a></div>';
           }
           else
           {
               echo '<div class="alert alert-danger"> Your Account Not Activated : ) </div>';
           }
       }
   }

   /****************Login Validation Form***************** */
   function login_validation()
   {
       if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-login']))
       {
           global $conn;
           $Email = mysqli_real_escape_string($conn,$_POST['username']);
           $password = mysqli_real_escape_string($conn,$_POST['password']);
           $Remember = isset($_POST['remember']);

           $Errors=[];

           if(empty($Email))
           {
               $Errors[]= " Please Enter Your Email  ";
           }

           if(empty($password))
           {
                $Errors[]= " Please Enter Your Password  ";
           }

           if(!empty($Errors))
           {
               foreach($Errors as $Display)
               {
                   echo Error_Display($Display);
               }
           }
           else
           {
               if(login($Email,$password,$Remember))
               {
                   header("location:dashboard.php");
               }
               else
               {
                   echo Error_Display(" Your Password or Email is Incorrect ");
               }
           }
       }
   }


   // Function Login
   function login($Email,$Password,$Remember)
   {
       global $conn;
       $query = "SELECT * FROM members WHERE email='$Email' AND status='1'";
       $result = mysqli_query($conn,$query);

       if($row=mysqli_fetch_assoc($result))
       {
           $db = $row['password'];

           if(md5($Password)==$db)
           {
               if($Remember == true)
               {
                    setcookie('email',$Email, time() + 86400);
               }
               $_SESSION['email']=$Email;
                return true;
           }
           else
           {
                return false;
           }
       }
   }
   function login_admin($Email,$Password,$Remember)
   {
       global $conn;
       $query = "SELECT * FROM users WHERE username='$Email' AND status='1'";
       $result = mysqli_query($conn,$query);

       if($row=mysqli_fetch_assoc($result))
       {
           $db = $row['password'];

           if(md5($Password)==$db)
           {
               if($Remember == true)
               {
                    setcookie('email',$Email, time() + 86400);
               }
               $_SESSION['email']=$Email;
                return true;
           }
           else
           {
                return false;
           }
       }
   }

   // Logged In Function
   function logged_in()
   {
       if(isset($_SESSION['email']) || isset($_COOKIE['email']))
       {
           return true;
       }
       else
       {
           return false;
       }
   }

  /*************Function Recover Password***************** */
  function recover_password()
  {
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_recover']))
      {
          if(isset($_SESSION['token']) && $_POST['token_input'] == $_SESSION['token'])
          {
                global $conn;
                $Email = mysqli_real_escape_string($conn,$_POST['Email']);

                if(Email_Exist($Email))
                {
                    $code = md5($Email+microtime());
                    setcookie('temp_code',$code,time() + 900);
                    $query = "UPDATE users set validation_code='$code ' WHERE email='$Email'";
                    mysqli_query($conn,$query);

                    $Subject = " Please Reset Your Password ";
                    $Message = " Your Reset Validation Code is {$code} please click here up/MyApp/Code.Php?Email='$Email'&Code='$code'";
                    $header = "no-reply@onlineittuts.com";

                    if(Send_Email($Email,$Subject,$Message,$header))
                    {
                        echo '<div class="alert alert-success"> Please Check Your Email or Spam Folder</div>';
                    }
                    else
                    {
                        echo Error_Display(" Something Wrong : )");
                    }

                }
                else
                {
                    echo Error_Display(" Email Not Exists : ) ");
                }
          }
      }
  }

  /****************Validation Code****************** */
  function validation_code()
  {
      global $conn;
      if(isset($_COOKIE['temp_code']))
      {
            if(isset($_GET['Email']) && isset($_GET['Code']))
            {
                if(isset($_POST['token_code']))
                {
                    $Email = $_GET['Email'];
                    $Code = $_POST['token_code'];

                    $query = "select * from users where Validation_Code='$Code' AND Email='$Email'";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_fetch_assoc($result))
                    {
                        setcookie('temp_code',$Code,time() + 600);
                        header("location:reset.php?Email=$Email&Code=$Code");
                    }
                    else
                    {
                        echo Error_Display(" Your Validation Code is Incorrect ");
                    }
                }
            }
            else
            {
                header("location:recover.php");
                set_message('<div class="alert alert-danger"> Something is Wrong </div>');
            }
      }
      else
      {
          header("location:recover.php");
          set_message('<div class="alert alert-danger">Your Validation Code Has Been Expired </div>');
      }
  }


  /*****************Reset Password Function******************** */
  function reset_password()
  {
      if(isset($_COOKIE['temp_code']))
      {
          global $conn;
          if(isset($_GET['Email']) && isset($_GET['Code']))
          {
               if(isset($_SESSION['token']) && isset($_POST['pass_token']))
               {
                   if($_SESSION['token']==$_POST['pass_token'])
                   {
                       if($_POST['password']==$_POST['cpassword'])
                       {
                            $up_password = md5($_POST['password']);
                            $Email = $_GET['Email'];
                            $query = "update users set Password='$up_password', Validation_Code='0' where Email='$Email'";
                            mysqli_query($conn,$query);
                            header("location:login.php");
                            set_message('<div class="alert alert-success"> Your Password Has Been Updated :) </div>');

                       }
                       else
                       {
                           echo Error_Display(" Your Password Not Matched ");
                       }
                   }
               }

          }
          else
          {
            header("location:recover.php");
          }
      }
      else
      {
          header("location:recover.php");
          set_message('<div class="alert alert-danger">Your Validation Code Time Period Has Been Expired</div>');
      }
  }

?>
