
@extends ('layouts.app')
 
@section ('contenue')


<div class="section-title">
                              
                                <h1 class="text-white">Page du jeu {{$jeu->nom}}</h1>
                            </div>

@if (isset($jeu))
<img src="{{$jeu->image}}">
<li>{{$jeu->Resumer}}</li>
@else
<p>Le film n'existe pas</p>
@endif
@endsection