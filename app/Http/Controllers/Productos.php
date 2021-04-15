<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;
class Productos extends Controller
{
    function list()
    {
        $productos = Producto::all();
        return view('productos',['granos'=>$productos]);
    } 
}
