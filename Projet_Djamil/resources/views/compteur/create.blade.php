@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Enregistrement d'un compteur</a>
@endsection
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3"></h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
      <div class="row">

        <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
      <form method="post" action="{{ route('compteur.store') }}">
          @csrf
          <div class="form-group">
              <label for="numero">Numero compteur:</label>
              <input type="text" class="form-control" name="numero"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Enregistrer</button>
      </form>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>
@endsection
