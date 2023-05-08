<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel - Contact Us</title>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <nav>
      <div class="nav-left">
        <a href="{{route('home')}}"><img src="{{ asset('imgs/logo.png') }}" alt="logo"></a>
      </div>
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
    <h1>{{$name}} Page</h1>
  </main>
</body>
</html>