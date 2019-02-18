@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Compteur</a>
@endsection
@section('main')

<div class="container">
  <div class="row">

    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
      <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
<div class="col-sm-12">
    <h1 class="display-3"></h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Numero</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($compteur as $compteur)
        <tr>
            <td>{{$compteur->id}}</td>
            <td>{{$compteur->numero}} </td>
            <td>
                <a href="{{ route('compteur.edit',$compteur->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('compteur.destroy', $compteur->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('compteur.create')}}" class="btn btn-primary">Nouveau Compteur</a>
</div>

</div>
</div>
</div>
@endsection
