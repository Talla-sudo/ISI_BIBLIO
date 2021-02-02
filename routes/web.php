<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route cote client 
Route::view('/','Lecteur/login');
Route::view('indexR','indexR');
Route:: view('index','Lecteur/index'); //Route vers Dashboard
Route:: view('layout','Lecteur/layout');//Route vers Menu principale
Route::view('etagere','Lecteur/etagere');
Route::view('profil','Lecteur/profil');
Route:: view('form','Lecteur/form');
Route:: view('index1','Lecteur/categ');
Route:: view('document','Lecteur/document');
Route:: view('Livre','Lecteur/Livre');
//Route cote Biliothecaire
Route:: view('layoutB','Bibliothecaire/layout');//Route vers Menu principale
Route:: view('indexB','Bibliothecaire/index');
Route:: view('ajoutL','Bibliothecaire/Lecteur/add');
Route:: view('listeL','Bibliothecaire/Lecteur/view');
Route:: view('addD','Bibliothecaire/Document/addD');
Route:: view('listD','Bibliothecaire/Document/listD');
Route:: view('addC','Bibliothecaire/cathegorie/addC');
Route:: view('listC','Bibliothecaire/cathegorie/listC');
Route::view('profilB','Bibliothecaire/profilB');