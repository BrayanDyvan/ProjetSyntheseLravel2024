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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/border.css') }}">
    <link rel="stylesheet" href="{{ asset('css/avatar.css') }}">
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
    @if (session('success'))
            <div class="container alert alert-success ">

                {{session('success')}}


            </div>
        @endif
        @if (isset($errors) && $errors->any())
            @foreach ($errors->all() as $error)
                <div class="container alert alert-danger ">
                    {{$error}}
                </div>
            @endforeach

        @endif
        <div class="container-fluid d-flex flex-row">
       
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
                                    <li><a href="{{route('jeux.categories')}}">Categories <span
                                                class="arrow_carrot-down"></span></a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('jeux.categories')}}">Categories</a></li>
                                            <li><a href="{{route('jeux.anime-details')}}">Anime Details</a></li>
                                            <li><a href="{{route('jeux.anime-watching')}}">Anime Watching</a></li>
                                            <li><a href="{{route('jeux.blog-details')}}">Blog Details</a></li>
                                            <li><a href="{{route('jeux.signup')}}">Sign Up</a></li>
                                            <li><a href="{{route('showLoginForm')}}">Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('jeux.blog')}}">Our Blog</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    @if(Auth::check() && in_array(Auth::user()->role, ['professeur', 'etudiantInfo']))





                                        <li><a href="{{ route('jeux.create')}}"><i class="fa fa-plus-circle"></i> Ajouter
                                                <span class="arrow_carrot-down"></span></a>
                                            <ul class="dropdown">
                                                <li> <a class=" " href="{{ route('jeux.create')}}"><i
                                                            class="fa fa-gamepad fa-2x" aria-hidden="true"></i> Jeux</a>
                                                </li>
                                                <li><a class=" " href="{{ route('jeux.createUsager')}}"><span
                                                            class="icon_profile"></span> Usagers</a></li>

                                            </ul>
                                        </li>
                                    @endif
                                </ul>


                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__right mobile-menu">
                            <a href="#" class="search-switch"><span class="icon_search"></span></a>
                            @auth
                                <!-- <a href="{{route('logout')}}" title="Deconnexion"><i class="fa fa-sign-out text-white"
                                        style="font-size:36px"></i></a> -->

                            @else
                                <a href="{{route('showLoginForm')}}" title="Connexion"><i class="fa fa-user fa-2x"
                                        aria-hidden="true"></i></a>

                            @endauth
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
            @auth
                <div>

                    <p class="mt-3 px-3 avatar">



                        <a href="{{route('showLoginForm')}}" title="{{Auth::user()->nom . Auth::user()->prenom}}"
                            style="font-style:50px;"><img src="{{asset('img/usagers/' . Auth::user()->avatar)}}"
                                alt="avatar" style="border-radius:50%;" width="40px"></span></a>

                    <div style="width:320px;height:500px;" class="profil d-none">
                        <ul class=" bg-dark text-white ">
                            <li class="px-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>   PL<i class="fa fa-gamepad fa-21" aria-hidden="true"></i><span
                                    class="fw-1 fs-5"></span>Y</span></div>
                                    <div class="py-1"><a href="{{route('logout')}}" style="color:white;" title="se déconnecter">Deconnexion </a></div>
                                </div>
                            </li>
                            <li class="px-4 mt-1">

                                <a href="{{route('showLoginForm')}}"
                                    title="{{Auth::user()->nom }}  {{ Auth::user()->prenom}}" style="font-style:50px;"><img
                                        src="{{asset('img/usagers/' . Auth::user()->avatar)}}" alt="avatar"
                                        style="border-radius:50%;" width="50px"></span></a> {{ Auth::user()->prenom}} {{Auth::user()->nom }}
                                
                            </li>
                            <li class="mb-1 ms-4 px-2"><u>Identifiants du compte</u> </li>
                            <li class="text-primary px-2" style="font-size:13px">Matricule: {{ Auth::user()->matricule}}</li>
                            <li class="text-primary mb-2 px-2" style="font-size:13px"><span class="icon_mail"></span>
                                {{ Auth::user()->email}}</li>
                                <ul class="bg-white text-dark">

                                
                            <li style="border-top: 1px solid white;font-size:12px" class="text-dark px-2">Derniere connexion le </li>
                            <li class="mb-1 px-2 text-dark" style="font-size:13px">{{$date}} à {{$heure}}</li>
                            <li class="mb-1 px-2 text-dark">
                            @if(Auth::check() && in_array(Auth::user()->role, ['professeur','etudiantInfo']))
                                    <a href="{{route('usager.edit',Auth::user())}}" style="color:green;"
                                                title="Modifier les informations du compte">Modification</a> ou
                                  
                                      <a type="button" class="btn me-3 text-danger" title="Supprimer les informations du compte" data-bs-toggle="modal" data-bs-target="#exampleModal{{Auth::user()->id}}" >
                                                Suppression </a>du compte
     
                              @endif
         
                        </li>
                        <li class="mb-1 px-2 text-dark"><u> <a href="#" class="text-info">Afficher le compte</a> </u></li>
                                   
                            <li class=" p-lg-3 " style="background-color: rgb(20, 20, 79);"><a href="{{route('login')}}" style="color:white;font-size:13px;" title="connexion"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i> Se connecter avec un autre compte </a> </li>
                            </ul>
                        </ul>
                    </div>

                    </p>
                </div>
                <div class="modal fade " id="exampleModal{{Auth::user()->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h2 class="modal-title fs-5 text-center" id="exampleModalLabel"><i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>  ATTENTION</h2>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                                 </div>
                                 <form method="POST" action="{{route('usager.destroy',[Auth::user()->id])}}">
                             <div class="modal-body">
                                     @csrf
                                      @method('DELETE')
                                    
                             <p class="text-danger " style="font-weight:bold;"> Voulez-vous vraiment supprimer {{Auth::user()->nom}} ?</p>
     
                         </div>
                         <div class="modal-footer">
                             <button type="submit"class="btn btn-success">Supprimer</button>
                                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                         </div>
                         </form>
                     </div>
                    </div>
            @endauth
        </div>
    </header>
    @auth

    @endauth
    
    <!-- Header End -->

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

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/avatar.js') }}"></script>

</body>

</html>