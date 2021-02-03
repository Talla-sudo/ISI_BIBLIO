 
@extends('Lecteur/layout')
@section('Menu')

<div class="content-inner">
<!-- Page Heading -->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Cathegorie</h2>
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
                    <th>Nombre de Livre </th>
                    <th>Action </th>
                    
                    
                                            
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Programmation</td>
                        <td>30</td>
                    
                        <td><a href="Livre"><button class="btn btn-primary" >Consulter</button></a></td>
                      
                        
                    </tr>
                   
                    <tr>
                   
                    <td>Comptabilite</td>
                        <td>10</td>
                    
                        <td><a href="Livre"><button class="btn btn-primary" >Consulter</button></a></td>
                        
                    </tr>
                    <tr>
                    <td>reseaux </td>
                  
                        <td>30</td>
                    
                        <td><a href="Livre"><button class="btn btn-primary" >Consulter</button></a></td>
                    </tr>
                    <tr>
                        
                        <td>Marketing</td>
                        <td>30</td>
                    
                        <td><a href="Livre"><button class="btn btn-primary" >Consulter</button></a></td>
                       
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
@endsection