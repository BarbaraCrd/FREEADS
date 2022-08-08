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
                <h2 class="text-uppercase">UPDATE YOUR {{ $post->title }} AD</h2>
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
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h6 class="createtitle">TITLE</h6>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Insert your new title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">CATEGORY</h6>
                <select name ="category" class="form-control">
                <option value="{{ $post->category }}" selected>{{ $post->category }}</option>
                @foreach($categories as $category)
                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h6 class="createtitle">DESCRIPTION</h6>
                    <textarea class="form-control"  name="description" cols="30" rows="10" placeholder="Insert your new description">{{ $post->description }}</textarea>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">PRICE</h6>
                <input type="number"step=".01"name="price" value="{{ $post->price }}"class="form-control" placeholder="Enter your price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">LOCATION</h6>
                <select name ="location" class="form-control">
                <option value="{{ $post->location }}" selected>{{ $post->location }}</option>
                @foreach($locations as $location)
                <option value="{{ $location->location_name }}">{{ $location->location_name }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createsubtitle">ACTUAL FIRST PICTURE</h6>
                <img class="img_ind" src="{{ asset('imagesposts/' . $post->picture) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">UPLOAD NEW PICTURE</h6>
                <input type="file" name="picture" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createsubtitle">ACTUAL OPTIONAL SECOND PICTURE</h6>
                @if (isset($post->picture2))
                <img class="img_ind" src="{{ asset('imagesposts/' . $post->picture2) }}">
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h6 class="createtitle">UPLOAD NEW SECOND PICTURE</h6>
                <input type="file" name="picture2" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">UPDATE YOUR AD</button>
    </div>
        </div>
   
    </form>
@endsection