<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel - Homepage</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <header>
    <nav>
      <div class="nav-left">Logo</div>
      <div class="nav-right">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('contact')}}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    {{-- Stampo Hello World con variabile passata dalla route--}}
    <h1>{{$hello}}</h1>
  </main>

</body>
</html>