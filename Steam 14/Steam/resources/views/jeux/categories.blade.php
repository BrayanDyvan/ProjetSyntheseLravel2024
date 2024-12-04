@extends ('layouts.app')

@section ('titre', 'steam | index')


@section ('contenue')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./categories.html">Categories</a>
                    <span>Romance</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (count($categories))
                    @foreach ($categories as $categorie)
                        <div class="product__page__content">
                            <div class="product__page__title">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                        <div class="section-title">
                                            <h4>{{$categorie->nom}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="product__page__filter">
                                            <p>Order by:</p>
                                            <select>
                                                <option value="">A-Z</option>
                                                <option value="">1-10</option>
                                                <option value="">10-50</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($categorie->jeux as $jeuCategorie)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <a href="{{ route('jeux.show', [$jeuCategorie])}}">
                                                <div class="product__item__pic set-bg" data-setbg="{{$jeuCategorie->image}}">
                                                    <div class="ep">18 / 18</div>
                                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                    <div class="view"><i class="fa fa-download"></i> 9141</div>
                                                </div>
                                            </a>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
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
                <div class="product__pagination">
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
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