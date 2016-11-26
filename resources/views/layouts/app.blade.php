<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/dropdown.css">
    <script src="semantic/dist/semantic.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/main.css" >



    <title>@yield('title', config('app.name') )</title>


    <!--[if lt IE 9]>

    {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
    {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <style> textarea {
            resize: none;
        } </style>
</head>
<body>
<div id="app">
    <div class="ui inverted menu no-border">
        <div class="container">
            <div class="navbar-header">


                <!-- Branding Image -->
                <a class="header item" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </div>


            <!-- Authentication Links -->
            @if (Auth::guest())
                <a href="{{ url('/login') }}" class="item">Login</a>
                <a href="{{ url('/register') }}" class="item">Register</a>
            @else

                <div class="ui simple dropdown item">
                    {{ Auth::user()->name }} <i class="dropdown icon"></i>
                    <div class="menu">

                        <a class="item" href="{{ url('/compte') }}">
                            Compte
                        </a>


                        <a class="item" href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>


                      <!--  <a class="item" href="#">Link Item</a>
                        <div class="divider"></div>
                        <div class="header">Header Item</div>
                        <div class="item">
                            <i class="dropdown icon"></i>
                            Sub Menu
                            <div class="menu">
                                <a class="item" href="#">Link Item</a>
                                <a class="item" href="#">Link Item</a>
                            </div>
                        </div>
                        <a class="item" href="#">Link Item</a> -->
                    </div>
                </div>


            @endif

        </div>
    </div>

<div class="main ui container">
    @yield('content')
</div>



</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/semantic/dist/components/dropdown.js"></script>


<div class="ui inverted vertical footer segment form-page">
    <div class="ui container">
        Search Song 2016. All Rights Reserved
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('.ui.dropdown')
            .dropdown()
        ;
    });
</script>

</body>
</html>
