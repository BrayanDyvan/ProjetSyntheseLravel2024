@extends ('layouts.form')

@section ('titre', 'steam | index')
@section ('page', 'FORMULAIRE D\'ENREGISTREMENT DU JEU')

@section ('contenue')


<br>
<div class="container w-50">
    @if (session('success'))
        <div class="alert alert-success form1">

            {{session('success')}}


        </div>
    @endif
    @if (isset($errors) && $errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger form1">
                {{$error}}
            </div>
        @endforeach

    @endif

    <form method="post" action="{{ route('jeux.store') }}" enctype="multipart/form-data">
        @csrf


        <div class="form-group d-none">
            <label for="dateDepot" class="text-white">Date de dépot du jeu</label>
            <input type="date" class="form-control" id="dateDepot" placeholder="2024-11-11" name="dateDepot"
                value="{{$date}}">

            @if (isset($errors) && $errors->any())

                @foreach ($errors->get('dateDepot') as $error)
                    <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                @endforeach

            @endif
        </div>



        <div class="row">

            <div class="col-lg-6 col-md-6 trans">
                <div class="form-group">
                    <label for="nomJeux" class="text-white">Nom du jeu</label>
                    <input type="text" class="form-control w-100" id="nomJeu" placeholder="Nom du jeu" name="nom"
                        value="{{old('nom')}}">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('nom') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <div class="form-group">
                    <label for="video" class="text-white">Lien pour une video du jeu</label>
                    <input type="text" class="form-control" id="video" placeholder="http\\........" name="video"
                        value="{{old('video')}}">
                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('video') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <div class="form-group">
                    <label for="image" class="text-white">Lien pour la pochette du jeu</label>
                    <input type="file" class="form-control" id="image"  name="image"
                        value="{{old('image')}}" />
                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('image') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6">

                <div class="form-group">
                    <label for="nbVersion" class="text-white">nombre de version du jeu</label>
                    <input type="number" class="form-control" id="nbVersion" placeholder="1" name="nbVersion"
                        value="{{old('nbVersion')}}" min="0">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('nbVersion') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <div class="form-group d-none">
                    <label for="nbTelechargement" class="text-white">nombre de telechargement du jeu</label>
                    <input type="text" class="form-control" id="nbTelechargement" placeholder="1"
                        name="nbTelechargement" value="0">

                </div>

                <p class="text-white ">Qui dépose le jeu ?</p>

                <div class="form-group">

                    <select class="form-control w-100" id="professeur_id" name="professeur_id">

                        <option value=""> Veuillez choisir...</option>

                        @foreach($professeurs as $professeur)

                            <option value="{{ $professeur->id }}" {{ $professeur->id == old('professeur_id') ? 'selected' : null }}>
                                {{ $professeur->nom }} {{ $professeur->prenom }}
                            </option>

                        @endforeach

                    </select><br><br><br>

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('professeur_id') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <p class="text-white ">Quelle équipe a concu ce jeu ?</p>

                <div class="form-group">

                    <select class="form-control w-100" id="equipe_id" name="equipe_id">

                        <option value=""> Veuillez choisir...</option>

                        @foreach($equipes as $equipe)

                            <option value="{{ $equipe->id }}" {{ $equipe->id == old('equipe_id') ? 'selected' : null }}>
                                {{ $equipe->nom }}
                            </option>

                        @endforeach

                    </select><br><br><br>

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('equipe_id') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>
            </div>

        </div>

        <div class="form-group">
            <p id="resumer" class="text-white">Description du jeu</p>
            <textarea class="form-control" placeholder="Resumer du jeu" name="Resumer" rows="10" cols="50"
                value="{{old('Resumer')}}">{{old('Resumer')}}</textarea>
            @if (isset($errors) && $errors->any())

                @foreach ($errors->get('Resumer') as $error)
                    <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                @endforeach

            @endif
        </div>

        <div class="row d-flex flex-row justify-content-between mb-5">

            <div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            <div>
                <a class="btn btn-default bg-danger text-white m-auto ter4 " href="{{route('jeux.index')}}">Terminer</a>
            </div>


        </div>
    </form>

</div>
</div>

<div  tabindex="-1" id="modalEquipe" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Creer une equipe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
            </div>
            <div class="modal-body">


                <div>
                    @if (session('success'))
                        <div class="alert alert-success formEquipe">

                            {{session('success')}}

                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                </div>

                <form method="post" action="{{ route('jeux.storeEquipe') }}">
                    @csrf

                    <div class="form-group">
                        <label for="nomEquipe" class="text-dark">Nom de l'équipe</label>
                        <input type="text" class="form-control w-100" id="nomEquipe" placeholder="Equipe1" name="nom"
                            value="{{old('nom')}}">


                        @if (isset($errors) && $errors->any())

                            @foreach ($errors->get('nom') as $error)
                                <p class="text-danger" id="errorNomVersion"><span class="text-danger">*</span>{{$error}}
                                </p>
                            @endforeach

                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cache">Close</button>
                <button type="submit" class="btn btn-primary ms-2">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<script type="module" src="{{ asset('js/equipe.js') }}"></script>

<script src="{{ asset('js/modal.js') }}"></script>



@endsection