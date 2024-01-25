@extends('index')
@section('listevente')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste des categories de boissons</h4>
            <p class="card-description">
             vous pouvez voir les categories de boissons enregistrés
            </p>
            <div class="table-responsive pt-3" style="display: flex; flex-direction: column; width: 70%; height: 70%; margin-left: 3rem">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                     nom de categorie
                    </th>
                    <th>
                     Libelle
                    </th>
                    <th>
                       Supprimer
                       </th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                        Herman Beck
                      </td>
                  </tr>
                  
            
                </tbody>
              </table>
            </div>
          </div>
  </div>
@endsection