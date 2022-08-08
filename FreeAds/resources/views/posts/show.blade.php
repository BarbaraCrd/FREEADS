@extends('posts.layout')
  


@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">

            <div class="row mt-4 mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mt-10">
                        <a class="back-search" href="{{ route('searchglobal') }}">BACK</a>
                    </div>
                </div>
            </div>
            @auth
            @if($user->id == $post->user_id)
            <div class="pull-left">
                <h2 class="text-uppercase">YOUR {{ $post->title }}'S AD</h2>
            </div>
            @endif
            @endauth
            @if($user->id != $post->user_id)
            <div class="pull-left">
                <h2 class="text-uppercase">{{ $post->title }}'S AD</h2>
            </div>
            @endif
        </div>
    </div>
    
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="ppost2">
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
                        <p class="descrip">{{ $post->description }}</p>
                        @if($user->id != $post->user_id)
                        <div class="footcreate">
                        <a class="createu" href="{{ route('message.create',['seller_id' => $post->user_id , 'ad_id' => $post->id ]) }}">Contact {{ getSellerName($post->user_id) }}</a>
                        </div>
                        @endif
                        @auth
                        @if($user->id == $post->user_id)
                        <form class="mt-5" action="{{ route('posts.destroy',$post->id) }}" method="POST" >  
                        

                            <a class="btn btn-success" href="{{ route('posts.edit',$post->id) }}">Update</a>  
                            
                            <a class="mod" href="#del" >Delete</a>

                            <div id="del" class="modal">
                                <div class="modal_content">
                                    <h4>Are you sure to delete your {{ $post->title }} ad ?</h4>
                                    <form  method="POST" action="{{ route('posts.destroy',$post->id) }}">      
                                        @csrf
                                        @method('DELETE')    
                                        <div class="row mt-5"></div>  
                                        <button type="submit" class="btn btn-success">YES</button>
                                        <a class="btn btn-danger" href="{{ route('posts.index',$post->id) }}">NO</a>  
                                    </form>
                                    <a href="#" class="modal_close">&times;</a>
                                </div>
                            </div>
                          

                        </form>
                        @endif
                        @endauth

                    </div>  
                    
                    <div class="col-auto d-lg-block">
                        <a class="mod2" href="#del2"><img class="img_ind5" src="{{ asset('imagesposts/' . $post->picture) }}" alt="Picture of {{ $post->title }}"></a>
                    </div>
                    <div class="col-auto d-lg-block">
                        @if (isset($post->picture2))
                            <a class="mod3_a" href="#del3_a"><img class="img_ind6" src="{{ asset('imagesposts/' . $post->picture2) }}" alt="Second picture of {{ $post->title }}"></a>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="cadegage">
        <div>
            <div id="del2" class="modal2">
                <div class="modal_content2">
                    <img  src="{{ asset('imagesposts/' . $post->picture) }}" alt="Picture of {{ $post->title }}">
                    <a href="#" class="modal_close2">&times;</a>
                </div>
            </div>
        </div>
    
        <div>
            <div id="del3_a" class="modal3_a">
                <div class="modal_content3_a">
                    <img src="{{ asset('imagesposts/' . $post->picture2) }}" alt="Picture of {{ $post->title }}">
                    <a href="#" class="modal_close3_a">&times;</a>
                </div>
            </div>
        </div>
    </div>



@endsection