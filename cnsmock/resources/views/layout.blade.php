<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Portada</title>
  <script src="{{ mix('js/app.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>

  <nav class="row site-header sticky-top py-1 justify-content-start">
    <div class="col-sm-2 m-3">
      <img src="http://localhost:8000/images/newspaper.png" class="banner-pin">
    </div>
    <a class="py-2 col-sm-4 d-none d-md-inline-block">CNSMOCK</a>
    <div class="col-sm-4 row">
      <a class="py-2 col-sm-4 d-none d-md-inline-block" href="#">INICIO</a>
    </div>
  </nav>

  <div class="container d-flex flex-row flex-wrap d-flex justify-content-around">
    @yield('content-page')
  </div>

  <footer class="py-1">
    <div class="row justify-content-between">
      <div class="col-sm-4">
        <img src="http://localhost:8000/images/newspaper.png" class="banner-pin">
        <small class="d-block mb-3 text-muted">© 2020 Todos los derechos resevados</small>
      </div>
      <div class="col-sm-5">
        <h5>Nuestro contenido</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">En primer plana</a></li>
          <li><a class="text-muted" href="#">Mas noticias</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>