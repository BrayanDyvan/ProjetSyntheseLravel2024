@extends ('layouts.app')

@section ('titre', 'steam | index')

@section ('contenue')




<!-- Hero Section Begin -->
<section class="hero boite1">
    <div class="container">
        <div class="hero__slider owl-carousel">
        @if (count($jeuxImageAffcihe))
        @foreach ($jeuxImageAffcihe as $jeuxImage)
            <div class="hero__items set-bg " data-setbg="{{$jeuxImage->image}}" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">{{$jeuxImage->nom}}</div>
                            <h2></h2>
                            <p></p>
                            <a href="{{ route ('jeux.show',[$jeuxImage])}}"><span>Telecharger</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                        @else
                   
                        <h1 class="text-danger text-center fs-1 " style="font-weight:bold;"></i> Jeux inexistants </h1>
                        @endif
            
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad boite2">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-2 offset-6" >
            @if(Auth::check() && in_array(Auth::user()->role, ['professeur','etudiantInfo','etudiant']))
            <a class="btn btn-default bg-danger text-white " href="{{ route ('jeux.create')}}"><i class="fa fa-plus-circle"></i> Ajouter</a>

                 @endif
            
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                @if (count($categories))
                @foreach ($categories as $categorie)
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                        <!-- @if(count($jeux))
                            @foreach ($jeux as $jeu)
                            @foreach ( $jeu->images as $jeuImage) 
                            
                            <h2>{{$jeuImage->nom}}</h2>
                            @endforeach
                            @endforeach

                            @else
                            @endif
                        @if(count($images))
                        @foreach ($images as $image)
                        <h2>{{$image->jeu->nom}}</h2>
                        @endforeach

                        @else
                        @endif -->
                     
                       
                    
                        
                            <div class="section-title">
                                <h4>{{$categorie->nom}}</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     
                            @foreach ($categorie->jeux as $jeuCategorie)


                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                    <a href="{{ route ('jeux.show',[$jeuCategorie])}}">
                                        <div class="product__item__pic set-bg" data-setbg="{{$jeuCategorie->image}}">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-download"></i> 9141</div>
                                        </div>
                                    </a>
                                        <div class="product__item__text">
                                            <div class="row d-flex flex-row justify-content-between">

                                                <div >
                                           
    
                                                    <ul>
                                                    @if(Auth::check() && in_array(Auth::user()->role, ['professeur']) )
                                                    
                                           
                                                    <li class="text-white fs-1"> <a href="{{ route('jeux.edit', [$jeuCategorie])}}" class="watch-btn ">
                                                        <span>Mise à jour</span> <span class="fs-5 fw-1"><i class="fa fa-cog text-info fa-2x"></i></span> </a></li>
                                                       

                                                    @endif

                                                       @if( (Auth::check() && Auth::user()->role === 'etudiantInfo') && (Auth::user()->equipe_id)==($jeuCategorie->equipe_id))
                                                       <li class="text-white fs-1"> <a href="{{ route('jeux.edit', [$jeuCategorie])}}" class="watch-btn ">
                                                        <span>Mise à jour</span> <span class="fs-5 fw-1"><i class="fa fa-cog text-info fa-2x"></i></span> </a></li>
                                                       

                                                    @endif
                                                    </ul>
                                                </div>
    
                                                <div>
                                                 

                                                @if(Auth::check() && in_array(Auth::user()->role, ['professeur']))
                                                <button type="button" class="btn me-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$jeuCategorie->id}}" >
                                    <i class="fa fa-trash text-danger" ></i>

                            </button>

                                                    @endif

                                                    @if( (Auth::check() && Auth::user()->role === 'etudiantInfo') && (Auth::user()->equipe_id)==($jeuCategorie->equipe_id))
                                                         
                                                    <button type="button" class="btn me-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$jeuCategorie->id}}" >
                                    <i class="fa fa-trash text-danger" ></i>

                            </button>

                                                    @endif
    

                <div class="modal fade " id="exampleModal{{$jeuCategorie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5 text-center" id="exampleModalLabel"><i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>  ATTENTION</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </div>
                            <form method="POST" action="{{route('jeux.destroy',[$jeuCategorie->id])}}">
                        <div class="modal-body">
                                @csrf
                                 @method('DELETE')
                               
                        <p class="text-danger " style="font-weight:bold;"> Voulez-vous vraiment supprimer {{$jeuCategorie->nom}} ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="submit"class="btn btn-success">Supprimer</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                    </form>
                </div>
    </div>
    </div>
                                                       
                                                </div>
                                            </div>
                                            <h5><a href="#">{{ $jeuCategorie->nom }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                      
                     
                        
                       
                       
                    </div>
                
                </div>
                @endforeach
                        @else
                        <p>rien </p>
                        @endif
                
                
               
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top downloads</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter=".day{{ $dateDay;}}">Day</li>
                          
                            <li data-filter=".week{{ $dateWeek;}}">Week</li>
                            <li data-filter=".month{{ $dateMonth;}}">Month</li>
                            <li data-filter=".years{{ $dateYear;}}">Years</li>
                        </ul>
                        @if(count($usagers))
                        @foreach($usagers as $usager)
                        @foreach($usager->jeux as $usagerJeu)


                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day{{date("d",$usagerJeu->created_at);}} years{{ $dateYear;}}
                            month{{ $dateMonth;}} week{{ $dateWeek;}}"
                                data-setbg="{{$usagerJeu->image}}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-download"></i> {{$usagerJeu->nbTelechargement}}</div>
                                <h5><a href="#">{{$usagerJeu->nom}}</a></h5>
                            </div>
                           @endforeach
                           @endforeach
                        @else
                        <p>R.A.S </p>
                        @endif
                            
                        </div>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>New Comment</h5>
                        </div>
                        @if(count($usagers))
                        @foreach($usagers as $usager)
                        @foreach($usager->jeux as $usagerJeu)

                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="{{$usagerJeu->image}}" alt="" height="130px">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="{{ route ('jeux.show',[$usagerJeu])}}">{{$usagerJeu->nom}}</a></h5>
                                <span><i class="fa fa-comments"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        @endforeach
                           @endforeach
                        @else
                        <p>R.A.S </p>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Section End -->
@endsection