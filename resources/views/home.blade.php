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
  <div class="container_fluid">
  <div class="container_medium">
  <h2>Lunga</h2>
  <ul>

  @foreach ($lunga as $prodotto)
  <li>
  <img src="{{$prodotto["src"]}}" alt="">
  <div class="info">
  <a href="prodotto/show/{{$prodotto["id"]}}">

  <h3>{{$prodotto["titolo"]}}</h3></a>
  <p> <strong>{{$prodotto["cottura"]}}</strong></p>
  <p>{{$prodotto["peso"]}}</p>
</div>

</li>
@endforeach
</ul>
<h2>corta</h2>
<ul>

@foreach ($corta as $prodotto)
<li>
<img src="{{$prodotto["src"]}}" alt="">
<div class="info">
<a href="prodotto/show/{{"id"}}">
<h3>{{$prodotto["titolo"]}}</h3></a>
<p> <strong>{{$prodotto["cottura"]}}</strong></p>
<p>{{$prodotto["peso"]}}</p>
</div>

</li>
@endforeach
</ul>
<h2>cortissima</h2>
<ul>

@foreach ($cortissima as $prodotto)
<li>
<img src="{{$prodotto["src"]}}" alt="">
<div class="info">
<a href="prodotto/show/{{"id"}}">
<h3>{{$prodotto["titolo"]}}</h3></a>
<p> <strong>{{$prodotto["cottura"]}}</strong></p>
<p>{{$prodotto["peso"]}}</p>
</div>

</li>
@endforeach
</ul>
</div>
</div>
  </main>

@endsection
