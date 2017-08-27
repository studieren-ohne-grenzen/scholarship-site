<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('subtitle') - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet"> 
  </head>
  <body>
    @if(Request::is('/'))
    <section class="hero bg-img is-medium">
    @else
    <section class="hero is-primary">
    @endif
      <div class="hero-head">
        <header class="nav nav-colors" id="navbar">
          <div class="container">
            <div class="nav-left">
            </div>
            <span id="navbar-burger" class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </span>
            <div class="nav-right nav-menu" id="nav-menu">
              <a class="nav-item @if(Request::is('/')) is-active @endif" href="/">
                Home
              </a>
              <a class="nav-item @if(Request::is('about')) is-active @endif" href="/about">
                About SOG
              </a>
              <a class="nav-item @if(Request::is('apply')) is-active @endif" href="/apply">
                Apply now
              </a>
            </div>
          </div>
        </header>
      </div>
      <div class="hero-body">
        <div class="container">
          <div class="columns is">
            <div class="column is-narrow has-text-centered">
              <img src="img/sog_logo.png" width="90" height="90">
            </div>
            <div class="column">
              <h1 class="title is-1"><a href="/">@yield('title')</a></h1>
              <p class="subtitle is-4">@yield('subtitle')</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    @yield('content')
    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">

          <a href="https://twitter.com/esfdeutschland" class="is-twitter">
            <svg role="img" title="twitter" class="svg-icon">
              <use xlink:href="img/icons.svg#twitter-square"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/studierenohnegrenzen" class="is-facebook">
            <svg role="img" title="facebook" class="svg-icon">
              <use xlink:href="img/icons.svg#facebook-square"/>
            </svg>
          </a>
          <a href="https://www.youtube.com/user/ESFdeutschland" class="is-youtube">
            <svg role="img" title="youtube" class="svg-icon">
              <use xlink:href="img/icons.svg#youtube-square"/>
            </svg>
          </a>

          <p>© 2017 Studieren Ohne Grenzen. All Rights Reserved.<br><a href="/imprint">Imprint</a>
          @yield('credits')</p>
        </div>
      </div>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
