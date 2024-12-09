@extends ('layouts.form')

@section ('titre', 'steam | index')
@section ('page', 'FORMULAIRE DE MODIFICATION D\'USAGER')

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
    <br>

    <form method="post" action="{{ route('usager.update', [$usager]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">

            <div class="col-lg-6 col-md-6 trans">
                <div class="form-group">
                    <label for="nomUsager" class="text-white">Nom de l'usager</label>
                    <input type="text" class="form-control w-100" id="nomUsager" placeholder="Nom de l'usager"
                        name="nom" value="{{old('nom', $usager->nom)}}">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('nom') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>
                <div class="form-group">
                    <label for="email" class="text-white">email de l'usager <span class="icon_mail"></span></label>
                    <input type="email" placeholder=" adresse email" name="email" class="form-control"
                        value="{{old('email', $usager->email)}}">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('email') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>



                <div class="form-group">
                    <label for="password" class="text-white">mot de passe de l'usager <span
                            class="icon_lock"></span></label>
                    <input type="password" class="form-control" placeholder="Password" name="password"
                        value="{{old('password', $usager->password)}}">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('password') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>


                <p class="text-white ">Qui enregistre l'usager ?</p>

                <div class="form-group">

                    <select class="form-control w-100" id="professeur_id" name="professeur_id">

                        <option value=""> Veuillez choisir...</option>

                        @foreach($professeurs as $professeur)

                            <option value="{{ $professeur->id }}" {{ $professeur->id == old('professeur_id', $usager->professeur_id) ? 'selected' : null }}>
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
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="prenomUsager" class="text-white">prenom de l'usager</label>
                    <input type="text" class="form-control w-100" id="prenomUsager" placeholder="prenom de l'usager"
                        name="prenom" value="{{old('prenom', $usager->prenom)}}">

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('prenom') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>
                <div class="form-group">
                    <label for="matricule" class="text-white">matricule de l'usager</label>
                    <input type="text" class="form-control" id="matricule" placeholder="2309567" name="matricule"
                        value="{{old('matricule', $usager->matricule)}}">
                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('matricule') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>


                <div class="form-group">
                    <label for="avatar" class="text-white">Avatar de l'usager</label>
                    <input type="file" class="form-control" id="avatar" name="avatar"
                        value="{{old('avatar', 'img/usagers/'.$usager->avatar)}}"  />
                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('avatar') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <p class="text-white ">Quel est le role de l'usager ?</p>

                <div class="form-group">

                    <select class="form-control w-100" id="role" name="role">

                        <option value=""> Veuillez choisir...</option>


                            <option value="etudiant" {{ 'etudiant' == old('role', $usager->role) ? 'selected' : null }}>
                            etudiant
                            </option>
                            <option value="etudiantInfo" {{ "etudiantInfo" == old('role', $usager->role) ? 'selected' : null }}>
                            etudiantInfo
                            </option>
                            <option value="professeur" {{ "professeur" == old('role', $usager->role) ? 'selected' : null }}>
                            professeur
                            </option>

                   

                    </select><br><br><br>

                    @if (isset($errors) && $errors->any())

                        @foreach ($errors->get('role') as $error)
                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                        @endforeach

                    @endif
                </div>

                <p class="text-white ">De quelle équipe cet usager fait-il parti ?</p>

                <div class="form-group">

                    <select class="form-control w-100" id="equipe_id" name="equipe_id">

                        <option value=""> Veuillez choisir...</option>

                        @foreach($equipes as $equipe)

                            <option value="{{ $equipe->id }}" {{ $equipe->id == old('equipe_id', $usager->equipe_id) ? 'selected' : null }}>
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

<div tabindex="-1" id="modalEquipe" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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