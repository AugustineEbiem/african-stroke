@extends('layouts.admin')
@section('adminContent')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Admin Profile</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>

                    <li class="active">
                     Profile
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
                <h4 class="m-t-0 header-title"><b>Update Profile </b></h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <!---Success Message--->
                        @include('layouts.messages')
                        <!---Error Message--->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{Route('admin_profile')}}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="{{$admin->name}}" name="full_name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" value="{{$admin->email}}" name="email" disabled required="">
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
