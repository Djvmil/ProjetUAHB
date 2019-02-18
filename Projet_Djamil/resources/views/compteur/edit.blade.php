@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Modification d'un compteur</a>
@endsection
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3"></h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <div class="container">
          <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
              <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
        <form method="post" action="{{ route('compteur.update', $compteur->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="numero">Numero:</label>
                <input type="text" class="form-control" name="numero" value={{ $compteur->numero}} />
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
      </div>
    </div>
  </div>
  </div>
    </div>
</div>
@endsection
