@extends ('layouts.formModification')

@section ('titre', 'steam | index')

@section ('page', 'Ajout de categories ')

@section ('contenue')

@if (isset($jeu))
  <br>
  <div class="container w-50 ">

    <div class="row text-dark mt-3 mb-3">


    <div class="col-12">


      <div>
      @if (session('success'))
      <div class="alert alert-success form2">

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

      <form method="post" action="{{ route('jeux.storeModifierJeuCategorie', [$jeu]) }}">
      @csrf
      <div class="row">
        <div class="col-lg-6 col-md-6 trans">
        <div class="form-group">

          <p class="text-white"> Jeu:</p>

          <select class="form-control w-100" id="jeu_id" name="jeu_id">


          <option value="{{ $jeu->id }}">{{ $jeu->nom }}</option>


          </select><br><br>

          @if (isset($errors) && $errors->any())

        @foreach ($errors->get('jeu_id') as $error)
      <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
    @endforeach

      @endif

        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="form-group">
          <p class="text-white">Categories:</p>
          <select class="form-control w-100" id="categorie_id" name="categorie_id">
          <option value=""> Veuillez choisir...</option>
          @foreach($categories as $categorie)

        <option value="{{ $categorie->id }}" {{ $categorie->id == old('categorie_id') ? 'selected' : null }}>
        {{ $categorie->nom }}
        </option>

      @endforeach
          </select><br><br>
          @if (isset($errors) && $errors->any())

        @foreach ($errors->get('categorie_id') as $error)
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
        <a class="btn btn-default bg-danger text-white m-auto ter1 d-none "
          href="{{ route('jeux.modifierVersion', [$jeu])}}">Terminer</a>
        </div>


      </div>
      </form>

    </div>

    </div>
  </div>

@else
  <p>Le jeux n'existe pas</p>
@endif

<script src="{{ asset('js/modal.js') }}"></script>




@endsection