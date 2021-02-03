@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">AJout Lecteur</h2>
            </div>
          </header>
        <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Enregistre Une categorie</h3>
                    </div>
                    <div class="card-body">
                      <p>Veuillez remplir ces informations </p>
                      <form action="/categorie" method="POST"> 
                        <div class="form-group">
                          <label class="form-control-label">Nom categorie : </label>
                          <input type="text" placeholder="Nom cathegorie" name="NomCathegorie" class="form-control">
                        </div>
                       
                        <div class="form-group">       
                          <input type="submit" value="Enregistre" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </section>
              
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