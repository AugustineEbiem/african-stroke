@extends('layouts.admin')
@section('adminContent')
<div class="container">


    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Chnage Password</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>

                    <li class="active">
                     Change Password
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Change Password </b></h4>
                <hr>



<div class="row">
<div class="col-sm-6">
<!---Success Message--->

<!---Error Message--->


</div>
</div>





<div class="row">
<div class="col-md-10">
<form class="form-horizontal" name="chngpwd" method="post" onsubmit="return valid();">

<div class="form-group">
<label class="col-md-4 control-label">Current Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="password" required="">
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">New Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="newpassword" required="">
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Confirm Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="confirmpassword" required="">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">&nbsp;</label>
<div class="col-md-8">

<button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                Submit
                            </button>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>











            </div>
        </div>
    </div>
    <!-- end row -->


</div> <!-- container -->
@endsection
