<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel - About Us</title>
</head>
<body>
  <header>
    <nav style="display: flex; justify-content: space-between; align-items: center;">
      <div class="nav-left">Logo</div>
      <div class="nav-right">
        <ul style="display: flex; gap: 2em; list-style-type: none;">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('contact')}}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <h1>{{$name}}</h1>
  </main>
</body>
</html>