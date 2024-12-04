<!DOCTYPE html>
<html lang="fr-ca">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
     <link rel="stylesheet"  href="{{ asset('css/border.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('jeux.index')}}">
                        PL<i class="fa fa-gamepad fa-21" aria-hidden="true"></i><span
                        class="fw-1 fs-5"></span>Y</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{route('jeux.index')}}">Homepage</a></li>
                                <li><a href="{{route('jeux.edit',[$jeu])}}">Modifications <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('jeux.edit',[$jeu])}}"> jeu</a></li>
                                        <li><a href="{{route('jeux.modifierCategorie',[$jeu])}}">categorie</a></li>
                                        <li><a href="{{route('jeux.modifierVersion',[$jeu])}}">version</a></li>
                                        <li><a href="{{route('jeux.modifierImage',[$jeu])}}">image</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="{{route('jeux.blog')}}">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                                @if(Auth::check() && in_array(Auth::user()->role, ['professeur','etudiantInfo']))
            

                
            
          
                                <li><a href="{{ route ('jeux.create')}}"><i class="fa fa-plus-circle"></i> Ajouter <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li>  <a class=" " href="{{ route ('jeux.create')}}"><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i> Jeux</a></li>
                                  <li><a class=" " href="{{ route ('jeux.createUsager')}}"><span class="icon_profile"></span> Usagers</a></li>
                                    
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        @auth
                        <a href="{{route('logout')}}" title="Deconnexion"><i class="fa fa-sign-out text-white" style="font-size:36px"></i></a>
                        
                        @else
                        <a href="{{route('showLoginForm')}}" title="Connexion"><span class="icon_profile"></span></a>
                        
                        @endauth
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
      <!-- Normal Breadcrumb Begin -->
      <section class="normal-breadcrumb set-bg" data-setbg="{{ asset('img/normal-breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i></h2>
                        <p>@yield ('page')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->
      
    @yield ('contenue')
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="{{route('jeux.index')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="{{route('jeux.index')}}">Homepage</a></li>
                            <li><a href="{{route('jeux.categories')}}">Categories</a></li>
                            <li><a href="{{route('jeux.blog')}}">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/player.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script>

</body>

</html>
