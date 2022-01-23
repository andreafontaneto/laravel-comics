@extends('layouts.app')

@section('content')
  
  <h1>PRODUCTS</h1>

  @foreach (config('cardData') as $comic)
    <ul>
      <li>Prezzo: {{$comic['price']}}</li>
      <li>Serie: {{$comic['series']}}</li>
      <li>Tipo: {{$comic['type']}}</li>
    </ul>

    <hr>
  @endforeach
  

@endsection