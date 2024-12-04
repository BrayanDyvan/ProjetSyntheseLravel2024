@extends ('layouts.formModification')

@section ('titre', 'steam | index')
@section ('page', 'Ajout de versions')

@section ('contenue')

@if (isset($jeu))
    <br>
    <div class="container w-50">

        <div class="row text-dark mt-3 mb-3">



            <div class="col-12">




                <div>
                    @if (session('success'))
                        <div class="alert alert-success form3">

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
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('jeux.storeModifierVersion', [$jeu]) }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6 col-md-6 trans">
                                <div class="form-group">
                                    <label for="nomVersion" class="text-white">Nom de la version du jeu</label>
                                    <input type="text" class="form-control w-100" id="nomVersion" placeholder="ver2024"
                                        name="nom" value="{{old('nom')}}">


                                    @if (isset($errors) && $errors->any())

                                        @foreach ($errors->get('nom') as $error)
                                            <p class="text-danger" id="errorNomVersion"><span class="text-danger">*</span>{{$error}}
                                            </p>
                                        @endforeach

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="lien" class="text-white">Lien de la version jeu</label>
                                    <input type="text" class="form-control" id="lien" placeholder="http\\........"
                                        name="lien" value="{{old('lien')}}">


                                    @if (isset($errors) && $errors->any())

                                        @foreach ($errors->get('lien') as $error)
                                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                        @endforeach

                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group ">
                                    <p class="text-white">Jeu</p>
                                    <select class="form-control w-100" id="jeu_id" name="jeu_id">

                                        <option value="{{ $jeu->id }}">
                                            {{ $jeu->nom }}
                                        </option>





                                    </select><br><br>

                                    @if (isset($errors) && $errors->any())
                                        @foreach ($errors->get('jeu_id') as $error)
                                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                        @endforeach

                                    @endif
                                </div>

                                <div class="form-group  ">
                                    <p class="text-white">Qualité de la version</p>
                                    <select class="form-control w-100" id="qualiteVersion" name="qualiteVersion">
                                        <option value=""> Veuillez choisir...</option>
                                        <option value="HD">HD</option>

                                    </select><br><br>


                                    @if (isset($errors) && $errors->any())

                                        @foreach ($errors->get('qualiteVersion') as $error)
                                            <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                        @endforeach

                                    @endif
                                </div>


                            </div>
                        </div>




                        <div class="row d-flex flex-row justify-content-between mb-5">

                            <div>
                                <button type="submit" class="btn btn-primary ms-2">Enregistrer</button>
                            </div>
                            <div>
                                <a class="btn btn-default bg-danger text-white m-auto ter2 d-none"
                                    href="{{ route('jeux.modifierImage', [$jeu])}}">Terminer</a>
                            </div>


                        </div>

                    </form>
                </div>



            </div>
        </div>
    </div>

@else
    <p>Le jeux n'existe pas</p>
@endif
<script src="{{ asset('js/ver.js') }}"></script>



@endsection