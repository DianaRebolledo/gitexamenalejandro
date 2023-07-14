<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function create(){

    } 
     public function strore(request$request){
        $producto=new producto();
        $producto->name=$request->name;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->existencia=$request->existencia;
        $producto->proveedor=$request->proveedor;
        $producto->save();
    }

}
