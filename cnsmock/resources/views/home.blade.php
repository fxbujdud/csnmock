@extends('layout')

@section('content-page')

  <div class="row" style="width: 100%;">
    <div class="row">
      <h2>Las noticias mas reelevantes del dia</h2>
    </div>
    <div class="row"></div>
  </div>
  
  @foreach ($notes as $note)
  <div class="card m-3" >
    <img class="card-img-top" src="{{ asset('images/newspaper.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $note->title }}</h5>
      <p class="card-text">{{ $note->summary }}</p>
      <a href="#" class="btn btn-primary">Ir a noticia</a>
    </div>
  </div>
  @endforeach
@endsection