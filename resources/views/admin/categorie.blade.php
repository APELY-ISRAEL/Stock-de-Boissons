@extends('index')
@section('categorie')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Les Categories</h4>
        <p class="card-description">
          Veuillez enregistrer vos Categories
        </p>
        <form class="forms-sample" style="display: flex; flex-direction: column; width: 70%; height: 70%; margin-left: 3rem">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Veuillez entrer votre categorie">
          </div>
         
          <div style="display: flex; flex-direction: row; margin-left: 40rem; width: 8rem; height: 2,5rem">
          <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
          <button class="btn btn-light">Annuler</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection