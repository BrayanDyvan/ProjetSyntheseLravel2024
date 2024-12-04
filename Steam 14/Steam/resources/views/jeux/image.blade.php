@extends ('layouts.form')

@section ('titre', 'steam | index')
@section ('page', 'Ajout de l\' image de jeu')

@section ('contenue')

<br>
<div class="container w-50">


    <div class="row text-dark mt-3 mb-3">

        <div class="col-12">

            <div>
                @if (session('success'))
                    <div class="alert alert-success form4">

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
            <div>
                <form method="post" action="{{ route('jeux.storeImage') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="nomImage" class="text-white">Nom de l'image </label>
                        <input type="text" class="form-control w-100" id="nomImage" placeholder="Nom de l'image"
                            name="nom" value="{{old('nom')}}">


                        @if (isset($errors) && $errors->any())

                            @foreach ($errors->get('nom') as $error)
                                <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                            @endforeach

                        @endif
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 trans">
                            <div class="form-group">
                                <label for="lien" class="text-white">Lien de l'image</label>
                                <input type="file" class="form-control" id="lien" placeholder="http\\........"
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

                                    <option value=""> Veuillez choisir...</option>

                                    @foreach($jeux as $jeu)
                                        <option value="{{ $jeu->id }}" {{ $jeu->id == old('jeu_id') ? 'selected' : null }}>
                                            {{ $jeu->nom }}
                                        </option>

                                    @endforeach



                                </select><br><br>

                                @if (isset($errors) && $errors->any())
                                    @foreach ($errors->get('jeu_id') as $error)
                                        <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                    @endforeach

                                @endif
                            </div>

                        </div>
                    </div>



                    <br>



                    <div class="row d-flex flex-row justify-content-between mb-5">

                        <div>
                            <button type="submit" class="btn btn-primary ms-2">Enregistrer</button>
                        </div>
                        <div>
                            <a class="btn btn-default bg-danger text-white m-auto "
                                href="{{ route('jeux.create')}}">Terminer</a>
                        </div>


                    </div>


                </form>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/img.js') }}"></script>



@endsection