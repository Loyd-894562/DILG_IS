@extends('layouts.app')

@section('content')
<div>
    <img style=" width: 100%; height: auto;" src="{{ asset('/img/facade.png') }}">
    <p></p>
    <div class="header" style=" padding: 7px; background: #DCDCDC; color: #030303; margin-bottom: 5px;">
        <h1 class="text-center">ABOUT US</h1>
    </div>


    <div class="card" style="width: 18rem;">
        <img src="{{ asset('/img/goal.png') }}"class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div>
@endsection
