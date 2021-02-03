 
@extends('Lecteur/layout')
@section('Menu')

<div class="content-inner">
<!-- Page Heading -->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Listes des Livres (Nom cathegorie) </h2>
            </div>
          </header>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Date de Publication </th>
                    <th>Auteur</th>
                    <th>Ouvrir</th>
                    <th>Details</th>
                                            
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Laravel</td>
                        <td>30 septembre 2001</td>
                        <td>Monsieur Lar</td>
                        <td><button class="btn btn-primary" >Ouvrir</button></td>
                        <td><button class="btn btn-success" >Details</button></td>
                        
                    </tr>
                   
                    <tr>
                    <td>Securite</td>
                        <td>30 septembre 2001</td>
                        <td>Monsieur Hacking</td>
                        <td><button class="btn btn-primary" >Ouvrir</button></td>
                        <td><button class="btn btn-success" >Details</button></td>
                        
                    </tr>
                    <tr>
                    <td>Bases des reseaux </td>
                        <td>30 septembre 1978</td>
                        <td>Monsieur Lo</td>
                        <td><button class="btn btn-primary" >Ouvrir</button></td>
                        <td><button class="btn btn-success" >Details</button></td>
                        
                    </tr>
                    <tr>
                        <td>Calculer des millions</td>
                        <td>30 septembre 1978</td>
                        <td>Madame Argent</td>
                        <td><button class="btn btn-primary" >Ouvrir</button></td>
                        <td><button class="btn btn-success" >Details</button></td>
                       
                    </tr>
                  
                </tbody>
            </table>
        </div>
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
 
@endsection