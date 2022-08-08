@extends('layout_home')

@section('content')
<div class="container">

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="row mt-4 mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mt-10">
                         <a class="back-search" href="{{ URL::previous() }}">BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="messagehead">
        <div class="pull-left">
            <h2 class="pull-left">CONTACT {{ strtoupper(getBuyerName($buyer_id)) }}</h2>

        </div>
        <div class="sellerinfo">        
            <div class="ppost2">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm-h-md-250 position-relative">
                    <div class="d-flex col p-4 d-flex flex-column position-static">
                        <div class="userinfo">
                            <div id="avatarnav">
                                <img class="avatarnav" src="{{ asset('images/avatars/' . getBuyerAvatar($buyer_id) ) }}"> 
                            </div>
                            <h6 id="usernameinfo">{{ getBuyerName($buyer_id) }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <form action="{{ route('message.storeA') }}" method="POST">
            @csrf
            <div class="form-group">
                <label id="msgtitle" for="content">Your message</label>
            <textarea id="msgcontent" name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            <div class="sendfrom">
                <label for="sendto">SEND FROM :</label>
                <input class="mt-2" type="text" name="sendto" id="sendto" readonly value="{{ auth()->user()->name }}">
            </div>
            </div>
            <input type="hidden" name="buyer_id" value={{ $buyer_id }}>
            <input type="hidden" name="ad_id" value={{ $ad_id }}>
            <input type="hidden" name="seller_id" value={{ auth()->user()->id }}>
            <button type="submit" class="msgsend">Send your message</button>
        </form>
</div>


@endsection
