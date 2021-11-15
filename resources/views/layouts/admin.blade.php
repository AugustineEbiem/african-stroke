
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <title>Africa Stroke Organization - Admin | Dashboard</title>
		<link rel="stylesheet" href="../../plugins/morris/morris.css">
        <link href="../../admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../../admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../../plugins/switchery/switchery.min.css">
        <script src="../../admin/assets/js/modernizr.min.js"></script>
        <style>
            .card-box:hover{
                background-color:white !important;
                box-shadow: 4px 4px 6px black !important;
            }
        </style>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="dashboard.php" class="logo"><span>ASO<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
                </div>
                        <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="../../../" class="logo"><span><span>A</span>S<span>O</span>.ORG</span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="../../admin/assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="../../admin/assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>


                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">


                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="../../admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, {{ Auth::user()->name }}</h5>
                                    </li>

                                    <li><a href="change_password"><i class="ti-settings m-r-5"></i> Change Password</a></li>

                                    <li><a href="{{ route('logout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>            </div>

                <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard" class="waves-effect"><i class="fa fa-home"></i> <span> Dashboard </span> </a>

                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tag"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="../../admin/category/create">Add Category</a></li>
                                    <li><a href="../../admin/category">Manage Category</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect "><i class="fa fa-book"></i> <span> Journals </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="../../admin/journals/create">Add Journal</a></li>
                                    <li><a href="../../admin/journals">Manage Journals</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tv"></i> <span> Blogs </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="../../admin/blogs/create">New Blog</a></li>
                                    <li><a href="../../admin/blogs">Manage Blogs</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-suitcase"></i> <span> Resources </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<!--<li><a href="new_resource.php">Add Resource</a></li>-->
                                    <li><a href="../../admin/resources">Resources</a></li>
                                </ul>
                            </li>

                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-sticky-note"></i> <span> News </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../../admin/posts/create">Add News</a></li>
                                    <li><a href="../../admin/posts">Manage News</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-image"></i> <span> Gallery </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../../admin/gallery/create">Add Photo</a></li>
                                    <li><a href="../../admin/gallery">Manage Gallery</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i> <span> Membership </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../../admin/members">Manage Members </a></li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>            <!-- Left Sidebar End -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('adminContent')

                </div> <!-- content -->

                <footer class="footer text-right">
                   2020 © Africa Stroke Organization
                </footer>

            </div>
        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../../admin/assets/js/jquery.min.js"></script>
        <script src="../../admin/assets/js/bootstrap.min.js"></script>
        <script src="../../admin/assets/js/detect.js"></script>
        <script src="../../admin/assets/js/fastclick.js"></script>
        <script src="../../admin/assets/js/jquery.blockUI.js"></script>
        <script src="../../admin/assets/js/waves.js"></script>
        <script src="../../admin/assets/js/jquery.slimscroll.js"></script>
        <script src="../../admin/assets/js/jquery.scrollTo.min.js"></script>
        <script src="../../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../../plugins/morris/morris.min.js"></script>
		<script src="../../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="../../admin/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="../../admin/assets/js/jquery.core.js"></script>
        <script src="../../admin/assets/js/jquery.app.js"></script>

    </body>
</html>
