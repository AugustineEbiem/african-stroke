@extends('layouts.admin')
@section('adminContent')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">ASO</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li class="active">
                        Dashboard
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <a href="members">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card-box widget-box-one">
                    <div class="widget-one-content">
                        <i class="fa fa-users" style="font-size:50px"></i>
                        <h1 class="pull-right">{{count($users)}} <small></small></h1>
                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Registered Users">Registered Users</p>
                    </div>
                </div>
            </div>
        </a><!-- end col -->
        <a href="admin/journals">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">

                <div class="wigdet-one-content">
                    <i class="fa fa-book" style="font-size:50px"></i>
                        <h1 class="pull-right">{{count($resources)}}  <small></small></h1>
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Resources</p>


                </div>
            </div>
        </div>
        </a><!-- end col -->
        <a href="#">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">
                <div class="wigdet-one-content">
                    <i class="fa fa-user-secret" style="font-size:50px"></i>
                    <h1 class="pull-right">{{count($partners)}}  <small></small></h1>
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Partners </p>
                </div>
            </div>
        </div>
        </a><!-- end col -->
        <a href="#">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">

                <div class="wigdet-one-content">
                    <i class="fa fa-user-md" style="font-size:50px"></i>
                    <h1 class="pull-right">{{count($committee)}}  <small></small></h1>
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Committee Members">Committee Members</p>



                </div>
            </div>
        </div>
        </a><!-- end col -->
        <a href="admin/category">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">

                <div class="wigdet-one-content">
                    <i class="fa fa-filter" style="font-size:50px"></i>
                     <h1 class="pull-right">{{count($cats)}}  <small></small></h1>
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories </p>



                </div>
            </div>
        </div>
        </a><!-- end col -->
        <a href="#">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">

                <div class="wigdet-one-content">
                    <i class="fa fa-list-ul" style="font-size:50px"></i>
                    <h1 class="pull-right">0 <small></small></h1>
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Events </p>

                </div>
            </div>
        </div>
        </a><!-- end col -->


        <a href="admin/posts">
            <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-layers widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
                    <h2>{{count($posts)}}  <small></small></h2>

                </div>
            </div>
        </div><!-- end col -->
        </a>


    </div>
    <!-- end row -->
    <div class="row">
        <a href="#">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card-box widget-box-one">
                    <i class="fa fa-speaker"></i>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Trash News</p>
                        <h2>0 <small></small></h2>

                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- Right Sidebar -->


</div> <!-- container -->
@endsection
