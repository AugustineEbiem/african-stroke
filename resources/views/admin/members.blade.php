@extends('layouts.admin')
@section('adminContent')
 <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Manage Members</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">Membership </a>
                    </li>
                    <li class="active">
                        Manage Members
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-sm-6">  
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="demo-box m-t-20">
                    <div class="m-b-30">
                        <a href="new_member">
                            <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                        </a>
                    </div>
                    <div class="row">
                    @if (count($users) > 0 ) 
                    @foreach ($users as $user)
                            <div class="col-xl-3 col-sm-4">
                            <div class="card-box widget-user">
                                <div>
                                    <i class="fa fa-user pull-right" style="font-size:55px"></i>
                                    <div class="wid-u-info">
                                        <h5 class="mt-3 mb-1"> {{$user->name}}</h5>
                                        <p class="text-muted mb-0">{{$user->email}}</p>
                                        <a href="members/{{$user->id}}"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                                        &nbsp;<a href="membership.php/{{$user->id}}/del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>
                                        <div class="user-position pull-right card">
                                            @if($user->is_admin == 1)
                                                <span class="text-info font-secondary">Admin</span>
                                            @else
                                                <span class="text-info font-secondary">User</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @else
                        <center>No Users</center>
                        
                    @endif
                    
                    </div>




                </div>

            </div>
        </div>
    </div> <!-- container -->
</div>
@endsection
