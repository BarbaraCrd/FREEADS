@extends('layout_home')
 
@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">

            <div class="row mt-4 mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mt-10">
                        <a class="back-search" href="{{ route('searchglobal')}}">BACK</a>
                    </div>
                </div>
            </div>


        <div class="pull-left">
            <h2>YOUR ADS</h2>
        </div>
        @include('partials.searchdash')
            @if (request()->input('search'))
                <h5 class="result">{{ $data->total() }} result(s) "{{ request()->search }}"</h5>
            @endif
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


    <div class="row mb-2">
        @foreach ($data as $post)
        <div class="col-md-12">
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
                            <a class="btnshow4" href="{{ route('posts.show',$post->id) }}">Show this ad</a>    
                        </form>
                    </div>
                </div>   
                <div class="col-auto d-flex d-lg-block">
                    <img class="img_ind3" src="{{ asset('imagesposts/' . $post->picture) }}" alt="Picture of {{ $post->title }}">
                    @if (isset($post->picture2))
                    <img class="img_ind4" src="{{ asset('imagesposts/' . $post->picture2) }}" alt="Picture of {{ $post->title }}">
                    @endif  
                </div>
            </div>
        </div>
        </div>  
        @endforeach
    </div> 

    <div class="pagin">
        {!! $data->links() !!}
    </div>
   
@endsection