<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Channelz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.9/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<body>
  <div class="ui container">
    <div class="ui segment">
      <div class="ui grid">
        <div class="ui two column row">
          <div class="ui left floated column">
            <a href="{{ url('/') }}"></a><button class="massive red ui button">
              Channelz
            </button></a>
          </div>
          <div class="ui right floated column">
            @if (Auth::guest())
              <a href="{{ url('/login') }}"><button class="ui right floated violet basic button">Login</button></a>
              <a href="{{ url('/register') }}"><button class="ui right floated teal basic button">Register</button></a>
            @else
                <span style="font-size : 17px;">Bienvenue {{ Auth::user()->name }}, nous sommes heureux de vous revoir</span>
                <a href="{{ url('/logout') }}"><div class="ui right floated violet button">Logout</div></a>
            @endif
          </div>
        </div>
      </div>
    </div>
  @yield('content')
</body>
</html>
