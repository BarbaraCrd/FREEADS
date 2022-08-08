@extends('layouts.navigation')

@section('content')

<div class="row mt-4 mb-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="back" href="{{ route('readglobal') }}">BACK</a>
        </div>
    </div>
</div>

<div class="pull-left">
    <h2>PURCHASES</h2>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


    @foreach ($messages as $message)
    <div class="col-md-12">
        <div class="ppost">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm-h-md-250 position-relative">
            <div class="d-flex col p-4 d-flex flex-column position-static">
                <div class="catpost">
                    <strong class="d-inline-block mb-2 text-uppercase">SEND FROM : {{ $message->sendto }}</strong>                
                </div>
                <div class="titpost">
                    <h5 class="mb-0 text-uppercase font-weight-bold">AD'S TITLE : {{ getAdTitle($message->ad_id) }}</h5>
                </div>
                <h6 class="mb-8 mt-2 text_muted">Send on: {{ $message->created_at->format('m-d-Y') }}</h6>

                    <h5 class="mt-4 text-uppercase font-weight-bold">Message :</h5>
                    
                    <h6 id="h6">-> {{ $message->content }} </h6>
                            
                <div class="row ml-0 mr-4 mt-4">
                    <form action="" method="POST" >   
                        <a class="createu2" href="{{ route('message.create',['seller_id' => $message->seller_id , 'ad_id' => $message->ad_id ]) }}">REPLY TO {{ getBuyerName($message->seller_id) }}</a>
                    </form>

                    <a class="mod4" href="#del4 {{ route('message.readA',$message->id) }}" >Delete</a>
                <div id="del4 {{ route('message.readA',$message->id) }}" class="modal4">
                    <div class="modal_content4">
                        <h4>Are you sure to delete this message ?</h4>
                        <form  method="POST" action="{{ route('message.destroy',$message->id) }}">      
                            @csrf
                            @method('DELETE')    
                            <div class="row mt-5"></div>  
                            <button type="submit" class="btn btn-success">YES</button>
                            <a class="btn btn-danger" href="{{ route('message.readA', $message->id) }}">NO</a>  
                        </form>
                        <a href="#" class="modal_close4">&times;</a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>  
@endforeach
</div>



@endsection