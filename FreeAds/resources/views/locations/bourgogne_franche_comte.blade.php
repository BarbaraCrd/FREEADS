@extends('layout_home')

@section('content')

<div class="row mt-5">
    <div class="col-lg-12 margin-tb">

            <div class="row mt-4 mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mt-10">
                        <a class="back-search" href="{{ route('home') }}">BACK</a>
                    </div>
                </div>
            </div>

            <div class="pull-left">
                <h2>BOURGOGNE-FRANCHE-COMTE</h2>
            </div>
        </div>
    </div>

<section class="carousel">
            <ul class="carousel-items">
                <li>
                    <div class="card">           
                    <a href="{{ route('women') }}" class="button"><img src="{{ asset('images/femme.png') }}" /></a>
                    </div>

                <li>                
                    <div class="card">           
                    <a href="{{ route('men') }}" class="button"><img src="{{ asset('images/homme.png') }}" /></a>
                    </div>
                </li>
                <li>                 
                    <div class="card">           
                    <a href="{{ route('multi') }}" class="button"><img src="{{ asset('images/multi.png') }}" /></a>
                    </div>
                </li>
                <li>                 
                    <div class="card">           
                    <a href="{{ route('home_cat') }}" class="button"><img src="{{ asset('images/home.png') }}" /></a>
                    </div>
                </li>
                <li>                 
                    <div class="card">           
                    <a href="{{ route('cars') }}" class="button"><img src="{{ asset('images/cars.png') }}" /></a>
                    </div>
                </li>
                <li>                 
                    <div class="card">           
                    <a href="{{ route('real_estate') }}" class="button"><img src="{{ asset('images/real_estate.png') }}" /></a>
                    </div>
                </li>
            </ul>
        </section>

        <div class="allfilters mb-5">
            <div class="searchsh">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-2 shadow-sm-h-md-250 position-relative">
                     <div class="d-flex col p-3 d-flex flex-column position-static">
                        <form action="{{ route('bourgogne_franche_comte') }}" method="GET">
                            <button type="submit" class="btnloc">FILTER BY CATEGORY</button>
                                <div class="filter">
                                    @foreach ($categories as $category)
                                    @php
                                        $checkedc = [];
                                        if(isset($_GET['categoriesfilter']))
                                        {
                                            $checkedc = $_GET['categoriesfilter'];
                                        }
                                    @endphp
                                    <input type="checkbox" name="categoriesfilter[]" value="{{ $category->category_name }}"
                                    @if(in_array($category->category_name, $checkedc)) checked @endif
                                    />
                                    {{ $category->category_name }}
                                    @endforeach
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  

        <div class="allposts">
            @foreach ($posts as $post)
                <div class="col-md-6">
                    <div class="ppost">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm-h-md-250 position-relative">
                            <div class="d-flex col p-4 d-flex flex-column position-static">
                                <div class="catpost">
                                    <strong class="d-inline-block mb-2 text-uppercase">{{ $post->category }}</strong>
                                </div>                    
                                <div class="titpost">
                                    <h5 class="mb-0 text-uppercase font-weight-bold">{{ $post->title }}</h5>
                                </div>
                                    <h6 class="mb-0 mt-2 text_muted font-weight-light">Posted: {{ $post->created_at->format('m-d-Y') }}</h6>
                                    <h6 class="text_muted font-weight-light">{{ $post->location }}</h6>
                                    <h4 class="mb-3 mt-2">${{ $post->price }}</h4>
                                <div class="row ml-0 mr-4">
                                    <form action="" method="POST" >   
                                        <a class="btnshow" href="{{ route('posts.show',$post->id) }}">Show this ad</a>    
                                    </form>
                                    @if (isset($post->picture2))
                                        <img class="img_ind2" src="{{ asset('images/pics.png') }}" alt="Other picture">
                                    @endif  
                                </div>
                            </div>   
                            <div class="col-auto d-flex d-lg-block">
                                <img class="img_ind" src="{{ asset('imagesposts/' . $post->picture) }}" alt="Picture of {{ $post->title }}">
                            </div>
                        </div>
                    </div>  
                </div>
            @endforeach
        </div>
    
          
    
            @endsection