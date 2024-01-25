<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   public function index(){
        return view('admin.main');
    }
    
    public function ajout(){
        return view('admin.ajout');
    }
    public function liste(){
        return view('admin.liste');
    }
    public function listevente(){
        return view('admin.listevente');
    }
    public function utilisateur(){
        return view('admin.utilisateur');
    }
    public function categorie(){
        return view('admin.categorie');
    }
    public function listecate(){
        return view('admin.listecate');
    }
    public function reservation(){
        return view('admin.reservation');
    }
}
