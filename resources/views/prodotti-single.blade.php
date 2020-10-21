@extends('layouts.main')

@section('title')
  Prodotti
@endsection

@section('mainContent')
  <main class="detail">
    <div class="cont-img">
      <h1>{{$data["titolo"]}}</h1>
      <img class="upper" src="{{$data["src-h"]}}" alt="">
      <img class="under" src="{{$data["src-p"]}}" alt="">
      <div class="desc container_medium">
        <p>
          {!!$data["descrizione"]!!}
        </p>
    </div>

    </div>
  </main>
@endsection
