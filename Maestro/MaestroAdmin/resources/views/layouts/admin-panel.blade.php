<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'Maestro' }}</title>

    {{-- SEO --}}
    <meta name="description" content="">

    <!-- Styles -->
    <link href="{{ asset('vendor/maestro/maestro-admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/maestro/maestro-admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/maestro/maestro-admin/css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">

    <header class="header">
        <div class="row">
            <div class="wrap-logo col-md-4 col-lg-2">
                <a class="logo" href="{{ url('/admin') }}"><span class="logo__span"><i class="fa fa-music fa-lg"></i></span>Maestro</a>
            </div>

            <div class="col-10">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link header__link header__link_user" href="#">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header__link" href="{{ url('/') }}" target="_blank">Сайт</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  header__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Выход
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>



    {{--  //////////////////////  --}}
    <div class="row">
        <div class="left-sidebar col-md-auto">
            <nav class="admin-menu__box">

                <div id="exampleAccordion" data-children=".item">

                    <div class="item">
                        <div class="admin-menu__btn">
                            <button><i class="fa fa-bars" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <div class="item">
                        <a class="nav-link admin-menu__parent-link admin-menu__parent-link_parent" href="{{ url('/admin') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Панель управления </span>
                        </a>
                    </div>

                    @if(!empty($menu))

                        @foreach($menu as $item)
                            <div class="item">
                                <a class="nav-link admin-menu__parent-link collapsed " data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion{{ $item->id }}" role="button" aria-expanded="true" aria-controls="exampleAccordion{{ $item->id }}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>{{ $item->title }} </span>
                                </a>
                                <div id="exampleAccordion{{ $item->id }}" class="collapse" role="tabpanel">
                                    <div class="mb-3">
                                        <ul class="nav flex-column admin-menu__sub-category">
                                            <li class="nav-item">
                                                <a class="nav-link admin-menu__sub-category__link" href="">Подменю 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link admin-menu__sub-category__link" href="">Подменю 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link admin-menu__sub-category__link" href="">Подменю 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="item">
                        <a class="nav-link admin-menu__parent-link collapsed" data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" role="button" aria-expanded="false" aria-controls="exampleAccordion2">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <span>Записи </span>
                        </a>
                        <div id="exampleAccordion2" class="collapse" role="tabpanel">
                            <div class="mb-3">
                                <ul class="nav flex-column admin-menu__sub-category">
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="{{ url('admin/articles') }}">Articles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <a class="nav-link admin-menu__parent-link collapsed" data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" role="button" aria-expanded="false" aria-controls="exampleAccordion3">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Система </span>
                        </a>
                        <div id="exampleAccordion3" class="collapse" role="tabpanel">
                            <div class="mb-3">
                                <ul class="nav flex-column admin-menu__sub-category">
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <a class="nav-link admin-menu__parent-link collapsed" data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4" role="button" aria-expanded="false" aria-controls="exampleAccordion4">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span>Отчеты </span>
                        </a>
                        <div id="exampleAccordion4" class="collapse" role="tabpanel">
                            <div class="mb-3">
                                <ul class="nav flex-column admin-menu__sub-category">
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link admin-menu__sub-category__link" href="">Подменю 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content col">
            @yield('content')
        </div>

    </div>
    {{--  //////////////////////  --}}

    {{--<example></example>

    <div id="dropdown">
        <dropdown>

        </dropdown>
    </div>--}}

    {{--<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
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
                        @endguest
                </ul>
            </div>
        </div>
    </nav>--}}



   {{-- <a v-bind:href="url">Link</a>

    <a v-bind:href="form.url">Link</a>
    
    <h1 >Name:     @{{ slug }} </h1>

    <form action="/admin" method="post">
        <input type="text" v-model="name">
        <button type="submit">Запрос</button>
        {{ csrf_field() }}
    </form>--}}

</div>



<!-- Scripts -->
{{--<script src=" https://cdn.jsdelivr.net/npm/vue"></script>--}}
{{--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
--}}


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

{{--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/maestro/maestro-admin/js/app.js') }}"></script>

</body>
</html>