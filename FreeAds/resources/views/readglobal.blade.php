
@extends('layouts.navigation')

@section('content')

<div class="row mt-4 mb-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
          <a class="back" href="{{ route('dashboard') }}">BACK</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="pull-left">
    <h2>MESSAGING</h2>
</div>


  <div class="readglobal">
    <div class="read">
      <a class="read1" href="{{ 'message-readA' }}"> 
        PURCHASES
      </a> 
    </div>
    <div class="read">
      <a class="read2" href="{{ 'message-read'}}">
        SALES
      </a>
    </div>
  </div>


@endsection