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
            @include('layouts.messages')
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="demo-box m-t-20">
                    <div class="m-b-30">
                        <a href="new_category">
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
                            @if (count($cats) > 0 )
                            <?php $cnt = 1; ?>
                                @foreach ($cats as $cat)
                                <tr>
                                    <th scope="row"><?php echo $cnt ?></th>
                                    <td>{{$cat->item}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->description}}</td>
                                    <td>{{$cat->created_at}}</td>
                                    <td>{{$cat->updated_at}}</td>
                                    <td><a href="category/edit/{{$cat->id}}"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                                    &nbsp;<a href="manage-categories.php?rid=8&amp;&amp;action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                </tr>
                                <?php $cnt++; ?>
                                @endforeach


                            @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--- end row -->
    </div>
</div> <!-- container -->
@endsection
