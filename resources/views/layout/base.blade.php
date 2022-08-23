<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <style type="text/css">

      a.nav-link {
        color: black;
      }
      a.nav-link:hover {
        color: white;
      }
        
    </style>

    <script type="text/javascript" src={{ asset('js/jquery.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/bootstrap.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/popper1-14.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/bootstrap4-1-3.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/jquery.mask.js') }}></script>

  </head>

  <body>

    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 rounded" style="background-color: #2e435d">
          <img class="img-fluid" src="{{ asset('imgs/e-get-faixa-topo.png') }}">
        </div>
      </div>
    
      <div class="row rounded text-white" style="background-color: #48c1f0">
        @yield('content')
      </div>
    
      <div class="row rounded text-white" style="background-color: #2e435d">
        <p>Desenvolvido por <strong><i>Ian Germano</i></strong></p>
      </div>

    </div>

    @yield('js')
  </body>
</html>