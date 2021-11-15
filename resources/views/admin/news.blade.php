@extends('layouts.admin')
@section('adminContent')
<div class="container">
    @include('layouts.messages')
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Manage News </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li class="active">
                        Manage News
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
                <div class="table-responsive">
                    <table class="table table-colored table-centered table-inverse m-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($posts) > 0)
                            @foreach ($posts as $post)
                            <tr>
                                <td><b>{{$post->title}}</b></td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->item}}</td>
                                <td><a href="posts/{{$post->id}}/edit"><i class="fa fa-link" style="color: #29b6f6;"></i></a>
                                    &nbsp;<a href="posts/deleteid=13&amp;&amp;action=del" onclick="return confirm('Do you reaaly want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                            </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



                    </div>
@endsection
