@extends('layouts.main')

@section('title')
  Prodotti
@endsection

@section('mainContent')
  <main class="detail">
    <div class="cont-img">
      <h1>{{$product["titolo"]}}</h1>
      <img class="upper" src="{{$product["src-h"]}}" alt="">

      <img class="under" src="{{$product["src-p"]}}" alt="">
      <div class="desc container_medium">
        <p>
          {!!$product["descrizione"]!!}
        </p>
        <span class="arrow-l"> <a href="/prodotti/show/{{$prev}}"> <i class="fas fa-angle-left"></i></a></span>
        <span class="arrow-r"> <a href="/prodotti/show/{{$next}}"> <i class="fas fa-angle-right"></i></a></span>
    </div>


    </div>
  </main>
@endsection
