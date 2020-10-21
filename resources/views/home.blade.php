@php

  $data = config('pasta');

  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach ($data as $key => $prodotto) {
    $prodotto["id"] = $key;

    if ($prodotto["tipo"] == "lunga") {
      $lunga[$key] = $prodotto;

    } elseif ($prodotto["tipo"] == "corta") {
      $corta[$key] = $prodotto;

    } elseif ($prodotto["tipo"] == "cortissima") {
      $cortissima[$key] = $prodotto;

    }
  }
@endphp

@extends('layouts.main')

@section('title')
  Home
@endsection

@section('mainContent')
  <main>
  <div class="container_fluid  background-img">
  <div class="container_medium">
  <h2  class="space">le lunghe</h2>
  <ul>

  @foreach ($lunga as $prodotto)
  <li>
  <img src="{{$prodotto["src"]}}" alt="">
  <div class="info">
  <a href="prodotti/show/{{$prodotto["id"]}}">

  <h3>{{$prodotto["titolo"]}}</h3></a>
  <img src="{{asset('images/icon.svg')}}" alt="">
  </div>

  </li>
  @endforeach
  </ul>
  <h2>le corte</h2>
  <ul>

  @foreach ($corta as $prodotto)
  <li>
  <img src="{{$prodotto["src"]}}" alt="">
  <div class="info">
  <a href="prodotti/show/{{$prodotto["id"]}}">
  <h3>{{$prodotto["titolo"]}}</h3></a>
  <img src="{{asset('images/icon.svg')}}" alt="">

  </div>

  </li>
  @endforeach
  </ul>
  <h2>le cortissime</h2>
  <ul>

  @foreach ($cortissima as $prodotto)
  <li>
  <img src="{{$prodotto["src"]}}" alt="">
  <div class="info">
  <a href="prodotti/show/{{$prodotto["id"]}}">
  <h3>{{$prodotto["titolo"]}}</h3></a>
  <img src="{{asset('images/icon.svg')}}" alt="">

  </div>

  </li>
  @endforeach
  </ul>
  </div>
  </div>
  </main>

@endsection
