@extends('layout_home')

@section('content')

<div class="row mt-4 mb-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="back" href="{{ route('home') }}">BACK</a>
        </div>
    </div>
</div>

    <div class="row mt-5">
        <div class="col-lg-12">
            @include('partials.searchglob')
                @if (request()->input('search'))
                    <h5>{{ count($data) }} result(s) "{{ request()->search }}"</h5>
                @endif
        </div>
    </div>
    </div>
 

    <div class="allposts">
        @foreach ($data as $post)
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
                        <div class="sandwich">
                            <div class="col-auto d-flex d-lg-block">
                                <img class="img_ind" src="{{ asset('imagesposts/' . $post->picture) }}" alt="Picture of {{ $post->title }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        @endforeach
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul class="mb-0 mt-0">
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>            
    @endif


@endsection

