@extends('layouts.admin')
@section('adminContent')
<style>
			#drop-zone{
				margin-top:20px;
				height:200px;
				background-color:white;
				border:3px dashed grey;
			}
			.text{
				margin-top:70px;
				color:grey;
				font-size:25px;
				font-weight:bold;
			}
			#drop-zone img{
				max-width:200px;
			}
		</style>
 <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">About Page  </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Pages</a>
                                        </li>
                                     
                                        <li class="active">
                                         About us
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-6">  
                                                                                        </div>
                            </div>
                                                        <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="p-6">
                                        <div class="">
                                            <form name="aboutus" method="post">
                                                 <div class="form-group m-b-20">
                                                    <label for="exampleInputEmail1">Image Title</label>
                                                    <input type="text" class="form-control" id="img_name" name="img_name" value="" required="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                            <h4 class="m-b-30 m-t-0 header-title"><b>Image Description</b></h4>
                                                            <input type="text" class="form-control" id="img_desc" name="img_desc" value="" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 well">
                                            		<hr style="border-top:1px dotted #ccc;">
                                            		<div id="col-md-12" style="text-align:center;">
                                            			<input type="file">
                                            			<div id="drop-zone">
                                            				<h3 class="text">Drag and Drop Images Here</h3>
                                            			</div>
                                            		</div>
                                            	</div>
                                                                                                
                                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update and Post</button>
    
                                            </form>
                                        </div>
                                    </div> <!-- end p-20 -->
                                </div> <!-- end col -->
                            </div>
                        </div>

@endsection
