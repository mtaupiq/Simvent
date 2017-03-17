<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style type="text/css">
        html {
          height: 100%;
          box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
          box-sizing: inherit;
      }
      body {
          position: relative;
          margin: 0;
          padding-top: 70px;
          padding-bottom: 6rem;
          min-height: 100%;
      }
        .footer {
          position: absolute;
          right: 0;
          bottom: 0;
          left: 0;
          padding: 1rem;
          background-color: #efefef;
          text-align: center;
      }
  </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="glyphicon glyphicon-folder-close text-primary"></span> <strong>S</strong>IM<strong>V</strong>ENT
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-fire"></span> Master <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('kategori')}}">Data Kategori</a></li>
                                <li><a href="{{url('subkategori')}}">Data Sub Kategori</a></li>
                                <li><a href="{{url('sub_subkategori')}}">Data Sub SubKategori</a></li>
                                <li><a href="{{url('barang')}}">Data Barang</a></li>
                                <li><a href="{{url('unit')}}">Data Unit</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-print"></span> Perangkat <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pengajuan Perangkat</a></li>
                                <li><a href="#">Pembelian Perangkat</a></li>
                                <li><a href="#">Distribusi Perangkat</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-duplicate"></span> Laporan <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Laporan Pengajuan</a></li>
                                <li><a href="#">Laporan Pembelian</a></li>
                                <li><a href="#">Laporan Distribusi</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
        &copy; 2017. {{ config('app.name') }} Perangkat TIK STIKes BTH Tasikmalaya.
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
