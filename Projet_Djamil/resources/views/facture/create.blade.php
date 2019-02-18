@extends('layouts/layout1')
@section('nom')
<a href="#" class="navbar-brand">Enregistrement d'une facture</a>
@endsection
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3"> </h1>
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
      <form method="post" action="{{ route('facture.store') }}">
          @csrf
          <div class="form-group">
              <label for="mois">Mois:</label>
              <input type="text" class="form-control" name="mois"/>
          </div>

          <div class="form-group">
              <label for="consommation">Consommation:</label>
              <input type="text" class="form-control" name="consommation"/>
          </div>

          <div class="form-group">
              <label for="prix">Prix:</label>
              <input type="text" class="form-control" name="prix"/>
          </div>
          <div class="form-group">
              <label for="reglement">Réglement:</label>


            <!--<input type="text" class="form-control" name="reglement"/>-->

             <input type="checkbox"  value="1" name="reglement">
             <!--<input type="checkbox" class="form-control" value="non" name="reglement"> non
              -->

          </div>

          <div class="form-group">
              <label for="abonnement_id">Abonnement:</label>
              <select name="abonnement_id"  class="form-control" id="abonnement_id">
               @foreach($abonnements as $key => $value)
                <option value="{{ $key }}"> {{ $value }} </option>
               @endforeach
              </select>
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
