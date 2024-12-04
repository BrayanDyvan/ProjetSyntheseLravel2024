@extends ('layouts.app')

@section ('titre', 'steam | index')

@section ('contenue')


@if (isset($jeu))

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route('jeux.index')}}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('jeux.show', [$jeu])}}">{{$jeu->nom}}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ asset('public/img/' .$jeu->image) }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{$jeu->nom}}</h3>
                                <!-- <span>フェイト／ステイナイト, Feito／sutei naito</span> -->
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>{{$jeu->nbTelechargement}} téléchargement</span>
                            </div>
                            <p>{{$jeu->Resumer}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Déposé par:</span> {{$jeu->professeur->nom}}
                                                {{$jeu->professeur->prenom}}
                                            </li>
                                            <li><span>adresse email:</span> {{$jeu->professeur->email}}</li>
                                            <li><span>Date de dépot:</span>{{$jeu->dateDepot}} </li>
                                            <li><span>Status:</span> Disponible</li>
                                            <li><span>Versions:</span> </li> @foreach ($jeu->versions as $jeuVersion) 
                                                <span class="text-white">{{$jeuVersion->nom}}; </span>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Categories:</span> </li> @foreach ($jeu->categories as $jeuCategories)
                                                <p class="text-white">{{$jeuCategories->nom}}</p>
                                            @endforeach
                                            <!-- <li><span>Rating:</span> 8.5 / 161 times</li>
                                                        <li><span>Durée:</span> 24 min/ep</li> -->
                                            <li><span>Qualité:</span> </li> @foreach ($jeu->versions as $jeuVersions) 
                                                <span class="text-white">{{$jeuVersion->qualiteVersion}}; </span>
                                            @endforeach
                                            <!-- <li><span>Views:</span> 131,541</li> -->
                                            <li><span>Programmeurs:</span> </li>
                                            @foreach ($jeu->equipe->usagers as $jeuequipe) 

                                                <span class=" text-white ">{{$jeuequipe->nom}} {{$jeuequipe->prenom}}; </span>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                            @if(Auth::check() && in_array(Auth::user()->role, ['professeur','etudiantInfo','etudiant']))
                                <a href="#" class="follow-btn"><i class="fa fa-download"></i>
                                    Telechargement</a>

                                    @else
                                    <a href="{{route('showLoginForm')}}" class="follow-btn"><i class="fa fa-download"></i>
                                    Telechargement</a>
                                    @endif
                                <a href="{{ route('jeux.watching', [$jeu])}}" class="watch-btn ">
                                    <span>Aperçu</span> <i class="fa fa-angle-right"></i></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mb-3" id="video">
                <div class="col-lg-12">



                    <div class="section-title">
                        <h5>Images</h5>
                    </div>
                    <div class="row">

                        @foreach ($jeu->images as $jeuImage)
                            <image src="{{ asset('img/jeux/' .$jeuImage->lien) }}" data-target="#Modal{{$jeuImage->id}}" data-toggle="modal"
                                style="width:200px;height:300px;margin-left:10px;margin-bottom:10px" class="bord"
                                alt="{{$jeuImage->nom}}" title="{{$jeuImage->nom}}" /></a>

                            <div class="modal" id="Modal{{$jeuImage->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                                                <h5 class="modal-title">Aubrey Drake "Drizzy" Graham</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div> -->
                                        


                                        <img src="{{ asset('img/jeux/' .$jeuImage->lien) }}" class="img-fluid  m-2" alt="{{$jeuImage->nom}}"
                                            title="{{$jeuImage->nom}}" />
                               
                                        </div>
                                    </div>
                                </div>


                        @endforeach
                        </div>


                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        @foreach ($jeu->usagers as $jeuUsager)


                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="{{$jeuUsager->avatar}}" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>{{$jeuUsager->prenom}} - <span>{{($jeuUsager->pivot->created_at)}}</span></h6>
                                    <p>{{$jeuUsager->pivot->commentaire}}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="anime__details__form">
                            @if(Auth::check() && in_array(Auth::user()->role, ['professeur', 'etudiant', 'etudiantInfo']))

                                <div class="section-title">
                                    <h5>Your Comment</h5>
                                </div>

                                <form method="post" action="{{ route('jeux.commentaires', [$jeu, $usager = Auth::user()]) }}">

                                    @csrf
                                    <input type="text" class="form-control w-100 d-none" id="idJeux" placeholder="Id du jeux"
                                        name="jeu_id" value="{{$jeu->id}}">

                                    <input type="text" class="form-control w-100 d-none" id="idUsager"
                                        placeholder="id de l'usager" name="usager_id" value="{{Auth::user()->id}}">

                                    <textarea placeholder="Your Comment" name="commentaire">{{old('commentaire')}}</textarea>
                                    <button type="submit"><i class="fa fa-location-arrow"></i> Envoyer</button>
                                </form>

                            @endif

                        </div>
                    </div>
                </div>


            </div>
    </section>
    <!-- Anime Section End -->
@else
    <p>Le jeux n'existe pas</p>
@endif
<script src="{{ asset('js/details.js') }}"></script>
@endsection