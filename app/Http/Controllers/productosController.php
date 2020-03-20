<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productosController extends Controller
{

    public function listadoproductos($id){
        $productos = Product::where('id_brand', '=', $id) ->get();
        return view("vistaProductos", compact('productos'));
    }
}
