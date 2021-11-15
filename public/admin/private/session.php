<?php
session_start();


function is_logged_in(){
	if (!isset($_SESSION['user'])) {
	header("Location:Membership");
}

}


?>