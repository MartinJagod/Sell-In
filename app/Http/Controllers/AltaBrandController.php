<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class AltaBrandController extends Controller
{
    public function alta(Request $req){
      $empresa=brand::where('name','=',$_POST['name'])->get();

     if ($empresa==$_POST['name']) {

        echo("Marca ya registrada"); exit;
        sleep(2);
        return redirect('/altaBrand');}
     else {
          $solicitar= new brand();
          $solicitar->name= $_POST['name'];
          $rutas = $req->file("logo")->store("public");
          $nombreArchivo=basename($rutas);
          $solicitar->logo=$nombreArchivo;
          $solicitar->save();
          }
    return redirect('/home');

   }

}
