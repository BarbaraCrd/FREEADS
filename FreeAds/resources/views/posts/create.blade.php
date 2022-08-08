@extends('posts.layout')
  
@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">

            <div class="row mt-4 mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mt-10">
                        <a class="back-search" href="{{ URL::previous() }}">BACK</a>
                    </div>
                </div>
            </div>

            <div class="pull-left">
                <h2 >CREATE AN AD</h2>
            </div>
        </div>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        Please verify your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">TITLE</h6>
                <input type="text" name="title" class="form-control" placeholder="Insert your title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">CATEGORY</h6>
                <select name ="category" class="form-control">
                <option value="" disabled selected>Select a category</option>
                @foreach($categories as $category)
                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">DESCRIPTION</h6>
                <textarea class="form-control"  name="description" placeholder="Insert your description" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">PRICE</h6>
                <input type="number"step=".01"name="price" class="form-control" placeholder="Enter your price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">LOCATION</h6>
                <select name ="location" class="form-control">
                <option value="" disabled selected>Select a location</option>
                @foreach($locations as $location)
                <option value="{{ $location->location_name }}">{{ $location->location_name }}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">PICTURE</h6>
                <input type="file" name="picture" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">OPTIONAL SECOND PICTURE</h6>
                <input type="file" name="picture2" class="form-control">
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">CREATE YOUR AD</button>
        </div>
    </div>
   
</form>
@endsection