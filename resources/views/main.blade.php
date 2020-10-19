@php
  include 'C:\Users\Danilo\Desktop\Boolean\Proggetti 13_07_2020\laravel-molisana\config\data.php';

  $data = json_decode($data, true);
  $lunga = [];
  $corta = [];
  $cortissima = [];
  foreach ($data as $prodotto) {
    if ($prodotto["tipo"] == "lunga") {
      $lunga[] = $prodotto;

    } elseif ($prodotto["tipo"] == "corta") {
      $corta[] = $prodotto;

    } elseif ($prodotto["tipo"] == "cortissima") {
      $cortissima[] = $prodotto;

    }
  }
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header>
      <div class="container_small">

      <img src="#" alt="LOGO">
      <nav>
        <ul>
          <li>Home</li>
          <li>Prodotti</li>
          <li>News</li>

        </ul>
      </nav>
    </div>

    </header>
    <main>
      <div class="container_fluid">
        <div class="container_medium">
          <h2>Lunga</h2>
          <ul>

          @foreach ($lunga as $prodotto)
            <li>
              <img src="{{$prodotto["src"]}}" alt="">
              <div class="info">
                <h3>{{$prodotto["titolo"]}}</h3>
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
              <h3>{{$prodotto["titolo"]}}</h3>
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
            <h3>{{$prodotto["titolo"]}}</h3>
            <p> <strong>{{$prodotto["cottura"]}}</strong></p>
            <p>{{$prodotto["peso"]}}</p>
          </div>
        </li>
      @endforeach
    </ul>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
