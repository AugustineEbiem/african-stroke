@extends('layouts.admin')
@section('adminContent')
<div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Gallery</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery </a>
                                        </li>
                                        <li class="active">
                                           Manage Gallery
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
                                                <a href="#">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                                                </a>
                                                 </div>
                                                
                                                
                                                <div class="card-box">
                                    <h4 class="header-title mb-4">Gallery Images</h4>

                                    <div class="row">
                                        <div class="col-xl-3 col-sm-4 card-box widget-user ">
                                            <a href="../images/gallery/ga4.png" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                <img src="../images/gallery/ga4.png" style="width:90%; height:auto;" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                        <div class="col-xl-3 col-sm-4 card-box widget-user">
                                            <a href="../images/gallery/ga5.png" data-lightbox="gallery-set" data-title="Or press the right arrow on your keyboard.">
                                                <img src="../images/gallery/ga5.png" style="width:90%; height:auto;" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                        <div class="col-xl-3 col-sm-4 card-box widget-user">
                                            <a href="../images/gallery/ga6.png" data-lightbox="gallery-set" data-title="The next image in the set is preloaded as you're viewing.">
                                                <img src="../images/gallery/ga6.png" style="width:90%; height:auto;" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                        <div class="col-xl-3 col-sm-4 card-box widget-user">
                                            <a href="../images/gallery/ga1.png" data-lightbox="gallery-set" data-title="Click anywhere outside the image or the X to the right to close.">
                                                <img src="../images/gallery/ga1.png" style="width:90%; height:auto;" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                                
											</div>

										</div>

							
									</div>                  
                                  


                    </div> <!-- container -->

                </div>
@endsection