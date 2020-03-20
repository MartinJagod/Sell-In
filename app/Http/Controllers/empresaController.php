<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class empresaController extends Controller
{
    public function listadoEmpresas (){
        $empresas = Brand::paginate(10);
              return view ("empresas", compact('empresas'));
    }
}
