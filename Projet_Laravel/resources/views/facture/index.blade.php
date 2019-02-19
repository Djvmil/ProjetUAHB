<?php use App\Abonnement; ?>
@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Facture</a>
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
          <td>Mois</td>
          <td>Consommation</td>
          <td>Prix</td>
          <td>Réglement</td>
          <td>Abonnement</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($facture as $facture)
        <tr>

            <td>{{$facture->id}}</td>
            <td>{{$facture->mois}}</td>
            <?php $abonnement = Abonnement::find($facture->abonnement_id); 
            $cons=$abonnement->cumulnouv-$abonnement->cumulanc;
            $prix = $cons*100;?>
            <td>{{$cons}}</td>
            <td>{{$prix}}</td>
            <td>{{$facture->reglement}}</td>
            <td>{{$facture->abonnement_id}}</td>
            <td>
                <a href="{{ route('facture.edit',$facture->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('facture.destroy', $facture->id)}}" method="post">
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
    <a style="margin: 19px;" href="{{ route('facture.create')}}" class="btn btn-primary">Nouvelle Facture</a>
</div>
</div>
</div>
</div>
</div>
@endsection
