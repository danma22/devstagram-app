<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controlador de la vista de Registro

class RegisterController extends Controller
{
    // Crear primer método del controlador
    public function index(){
        return view("auth.register");
    }
}
