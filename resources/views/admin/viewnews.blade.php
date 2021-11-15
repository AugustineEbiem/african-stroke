@extends('layouts.admin')
@section('adminContent')
 <div class="container">
     @include('layouts.messages')
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Add Post </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Add Post </a>
                    </li>
                    <li class="active">
                        New Document
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="p-6">
                <div class="">
                {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','files'=>'true', 'enctype' =>'multipart/data', ]) !!}
                <div class="form-group m-b-20">
                    {{Form::label('title','News heading') }}
                    {{Form::text('posttitle','', ['class'=>'form-control','value'=>$post->title, 'placeholder'=>'Enter title', 'required'=>'required']) }}
                </div>
                <div class="form-group m-b-20">
                    {{Form::label('title','Access Type')}}
                    {{Form::select('type',['3'=>'Choose Who can view','0'=>'Free','1'=>'Paid'],'3',['class'=>'form-control','required'=>''])}}
                </div>
                <div class="form-group m-b-20">
                    {{Form::label('title','News Category')}}
                    <select class="form-control" name="category" id="category" onchange="getSubCat(this.value);" required="">
                        <option value="">Select Category </option>
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group m-b-20">
                    {{Form::label('title','Details')}}
                    <br>
                    {{Form::textarea('body','',['class'=>'form-control','row'=>20,'cols'=>100,'required'=>''])}}
                </div>
                <div class="form-group m-b-20">
                    {{Form::label('title','Feature Image')}}
                    {{Form::file('image',['class'=>'form-control','required'=>'', 'placeholder'=>'Feature Image'])}}
                </div>
                {{Form::submit('Save and Post', ['class'=>'btn btn-success', 'required'=>''])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
