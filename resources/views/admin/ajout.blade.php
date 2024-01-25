@extends('index')
@section('ajout')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter une Boisson</h4>
        <p class="card-description">
          Veuillez saisir les informations
        </p>
        <form class="forms-sample" style="display: flex; flex-direction: column; width: 70%; height: 70%; margin-left: 3rem">
          <div class="form-group">
            <label for="libelle">Libelle</label>
            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrer le nom de la boisson">
          </div>
          <div class="form-group">
            <label for="prix">Prix</label>
            <input type="prix" class="form-control" id="prix" name="prix" placeholder="entrer le prix de la boisson">
          </div>
          <div class="form-group">
            <label for="type">Type</label>
              <select class="form-control" id="type" name="type" placeholder="entrer le type de la boisson">
                <option>Grand</option>
                <option>Petit</option>
              </select>
            </div>
          <div class="form-group">
            <label for="categorie">Categorie</label>
              <select class="form-control" id="categorie">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          <div class="form-group">
            <label>Photo</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Choisir</button>
              </span>
            </div>
          </div>
        <div style="display: flex; flex-direction: row; margin-left: 40rem; width: 10rem; height: 10rem">
          <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
          <button class="btn btn-light">Annuler</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection