@extends ('layouts.formModification')

@section ('titre', 'steam | index')

@section ('page', 'Ajout d\'images  ')

@section ('contenue')

@if (isset($jeu))
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
                    <form method="post" action="{{ route('jeux.storeModifierImage', [$jeu]) }}"
                        enctype="multipart/form-data">
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
                                    <input type="file" class="form-control" id="lien" name="lien" value="{{old('lien')}}">


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
                            </div>
                        </div>




                        <br>



                        <div class="row d-flex flex-row justify-content-between mb-5">

                            <div>
                                <button type="submit" class="btn btn-primary ms-2">Enregistrer</button>
                            </div>
                            <div>
                                <a class="btn btn-default bg-danger text-white m-auto ter3 d-none"
                                    href="{{ route('jeux.index')}}">Terminer</a>
                            </div>


                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@else
    <p>Le jeu n'existe pas</p>
@endif
<script src="{{ asset('js/img.js') }}"></script>



@endsection