<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use App\Brand;
class AltaProductController extends Controller
{
    public function FormularioAlta()
    {
      $empresas = Brand::all();
      return view('altaProduct', compact('empresas'));}

    public function alta (Request $req){
    $reglas=[
        "category"=>"string|min:3",
        "sub_category"=>"string|min:3",
        "code"=>"string|unique:product,code",
        "name"=>"string|min:3",
        "description"=>"string|min:3",
        "PVP"=>"numeric",
        "photo"=>"file"
      ];
    $mesajes=[
        "string"=>"El campo :attribute debe ser un texto",
        "unique"=>"El campo :attribute se encuentra repetido",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "nemeric"=>"El campo :attribute debe ser un numero"
      ];
      $this->validate($req, $reglas, $mesajes);                                                                                  
      $nuevoProducto = new Product();
      $nuevoProducto->code=$req["code"];
      $nuevoProducto->name=$req["name"];
      $nuevoProducto->description=$req["description"];
      $nuevoProducto->PVP=$req["PVP"];
      $nuevoProducto->ranking=$req["ranking"];
      $nuevoProducto->code=$req["code"];
      $nuevoProducto->category=$req["category"];
      $nuevoProducto->sub_category=$req["sub_category"];
      $nuevoProducto->id_brand=$req["id_brand"];
      $rutas = $req->file("photo")->store("public");
      $nombreArchivo=basename($rutas);
      $nuevoProducto->photo=$nombreArchivo;

      $nuevoProducto->save();


    }
}
