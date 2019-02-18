@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Abonnement</a>
@endsection
@section('main')

<div class="container">
  <div class="row">

    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
      <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">

<div class="col-sm-12">
    <h3 class="display-3"></h3>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Contrat</td>
          <td>Date</td>
          <td>Cummule Ancienne</td>
          <td>Cummule Nouvelle</td>
          <td>Compteur</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($abonnement as $abonnement)
        <tr>
            <td>{{$abonnement->id}}</td>
            <td>{{$abonnement->contrat}}</td>
            <td>{{$abonnement->date}}</td>
            <td>{{$abonnement->cumulanc}}</td>
            <td>{{$abonnement->cumulnouv}}</td>
            <td>{{$abonnement->compteur_id}}</td>
            <td>
                <a href="{{ route('abonnement.edit',$abonnement->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('abonnement.destroy', $abonnement->id)}}" method="post">
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

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('abonnement.create')}}" class="btn btn-primary">Nouveau abonnement</a>
</div>

</div>

<div>
  <div>
    <div>
@endsection
