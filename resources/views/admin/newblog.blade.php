@extends('layouts.admin')
@section('adminContent')
<div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Blog </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Blog </a>
                                        </li>
                                        <li class="active">
                                            New Document
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                        <div class="col-sm-6">  
                        <!---Success Message--->  
                                                
                        <!---Error Message--->
                                                
                        
                        </div>
                        </div>


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post" enctype="multipart/form-data">
                                         <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Blog Title</label>
                                        <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required="">
                                        </div>
                                            <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="category" id="category" onchange="getSubCat(this.value);" required="">
                                            <option value="">Select Category </option>
                                                                                        <option value="8">Research</option>
                                                                                        <option value="9">Preventions</option>
                                                                                        
                                            </select> 
                                            </div>
                                                
                                            <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Sub Category</label>
                                            <select class="form-control" name="subcategory" id="subcategory" required="">
                                            
                                            </select> 
                                            </div>
                                                     
                                            
                                            <div class="row">
                                            <div class="col-sm-12">
                                             <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                                            <textarea class="summernote" cols="16" style="width:100%" name="postdescription" required=""></textarea>
                                            </div>
                                            </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                            <div class="col-sm-12">
                                             <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                            <input type="file" class="form-control" id="postimage" name="postimage" required="">
                                            </div>
                                            </div>
                                            </div>
                                            
                                            
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
                                             <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div>
<!-- container -->
@endsection
