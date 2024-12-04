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
                        <a href="{{ route ('jeux.show',[$jeu])}}">{{$jeu->nom}}</a>
                        <a href="{{ route('jeux.watching', [$jeu])}}">video</a>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">

            <div class="row  mb-3" id="video">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <video id="player" playsinline controls data-poster="{{$jeu->video}}">
                            <source src="{{$jeu->video}}" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>Versions</h5>
                        </div>
                        @foreach ($jeu->versions as $jeuVersion) 

                            <a href="#">{{$jeuVersion->nom}}</a>
                        @endforeach

                    </div>
                    <div>
                        <div class="section-title">
                            <h5>Images</h5>
                        </div>
                        <div class="row">

                        @foreach ($jeu->images as $jeuImage)
                            <image src="{{$jeuImage->lien}}" data-target="#Modal{{$jeuImage->id}}" data-toggle="modal" style="width:200px;height:300px;margin-left:10px;margin-bottom:10px" class="bord"/></a>
 
                                <div class="modal" id="Modal{{$jeuImage->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <!-- <div class="modal-header">
                                                <h5 class="modal-title">Aubrey Drake "Drizzy" Graham</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> -->
                                     
                                            <img src="{{$jeuImage->lien}}" class="img-fluid  m-2"  />
                                         
                                        </div>
                                    </div>
 
                                   
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
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
                                    <p>{{$jeuUsager->Commentaire}}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
@else
    <p>Le jeux n'existe pas</p>
@endif

@endsection