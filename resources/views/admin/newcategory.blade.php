@extends('layouts.admin')
@section('adminContent')
<div class="container">


    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Add Category</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">Category </a>
                    </li>
                    <li class="active">
                        Add Category
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">Categories</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <!---Success Message--->

                        <!---Error Message--->


                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Add Category </b></h4>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" name="category" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label">Category</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Category name" name="category" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Item</label>
                                <div class="col-md-10">
                                    <select class="form-control" value="" name="item" required="">
                                        <option selected="" disabled="">Choose and Item</option>
                                        <option value="journals">Journals</option>
                                        <option value="news">News</option>
                                        <option value="blog">Blog</option>
                                        <option value="resources">Resources</option>
                                        <option value="gallery">Gallery</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Category Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" name="description" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">&nbsp;</label>
                                <div class="col-md-10">

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


</div>
<!-- container -->
@endsection
