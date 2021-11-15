@extends('layouts.admin')
@section('adminContent')
<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Manage Categories</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">Category </a>
                    </li>
                    <li class="active">
                       Manage Categories
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
<a href="new_subcategory">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
</a>
</div>
                            <div class="table-responsive">
                                <table class="table m-0 table-colored-bordered table-bordered-success">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Category</th>
                                            <th> Item</th>
                                            <th>Description</th>

                                            <th>Created</th>
                                              <th> Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Research</td>
                                            <td>resources</td>
                                            <td>the systematic investigation into and study of materials and sources in order to establish facts and reach new conclusions.</td>
                                            <td>2021-04-12 21:45:23</td>
                                            <td></td>
                                            <td><a href="edit-category.php?cid=8"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                                            &nbsp;<a href="manage-categories.php?rid=8&amp;&amp;action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>




                        </div>

                    </div>


                </div>
                <!--- end row -->



<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">

<h4><i class="fa fa-trash-o"></i> Deleted Categories</h4>

</div>

<div class="table-responsive">
<table class="table m-0 table-colored-bordered table-bordered-danger">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Category</th>
                                            <th>Description</th>

                                            <th>Posting Date</th>
                                              <th>Last updation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
</tbody>

                                </table>
                            </div>




                        </div>

                    </div>


                </div>


</div> <!-- container -->

</div> <!-- container -->
@endsection
