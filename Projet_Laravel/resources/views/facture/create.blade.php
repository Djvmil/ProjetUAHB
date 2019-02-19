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
              <select name="mois"  class="form-control" id="abonnement_id">
                <option value="Janvier"> mois </option>
                <option value="Janvier"> Janvier </option>
                <option value="Fevrier"> Fevrier </option>
                <option value="Mars"> Mars</option>
                <option value="Mai"> Mai </option>
                <option value="Juin"> Juin </option>
                <option value="Juillet"> Juillet</option>
                <option value="Aout"> Aout </option>
                <option value="Septembre"> Septembre </option>
                <option value="Octobre"> Octobre</option>
                <option value="Novembre"> Novembre </option>
                <option value="Decembre"> Decembre </option>
              </select>

          </div>

          <div class="form-group">
          </div>

          <!--div class="form-group">
              <label for="consommation">Consommation:</label>
              <input type="text" class="form-control" name="consommation"/>
          </div>

          <div class="form-group">
              <label for="prix">Prix:</label>
              <input type="text" class="form-control" name="prix"/-->
          </div>
          <div class="form-group">
              <label for="reglement">Réglement:</label>


            <!--<input type="text" class="form-control" name="reglement"/>-->
            <p>
             Oui: <input type="radio"  value="1" name="reglement">
             Non: <input type="radio"  value="0" name="reglement" checked>
           </p>

          </div>

          <div class="form-group">
              <label for="abonnement_id">Abonnement:</label>
              <select name="abonnement_id"  class="form-control" id="abonnement_id">
               @foreach($abonnements as $key => $value)
                <option value="{{ $key }}"> {{ $key }} </option>
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
