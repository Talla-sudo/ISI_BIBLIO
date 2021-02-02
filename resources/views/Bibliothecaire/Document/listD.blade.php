@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Liste des Lecteurs</h2>
            </div>
          </header>
        <div class="col-lg-12 mt-5">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">  
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Titre</th>
                              <th>Date de Publication</th>
                              <th>Auteur</th>
                              <th>Cathegorie</th>
                              <td>Modifier</td>
                              <td>Supprimer</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Laravel</td>
                              <td>30-09-2019 </td>
                              <td>Talla</td>
                              <td>Informatique</td>
                              <td><button class="btn btn-primary">Modifier</button></td>
                              <td><button class="btn btn-danger">Supprimer</button></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Seck</td>
                              <td>22-09-0000</td>
                              <td>Mareme</td>
                              <td>Genie Informatique</td>
                              <td><button class="btn btn-primary">Modifier</button></td>
                              <td><button class="btn btn-danger">Supprimer</button></td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
<footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Groupe ISI &copy; 2020-2021</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Defar by <a href="#" class="external">iKEUR</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    </div>
@endsection