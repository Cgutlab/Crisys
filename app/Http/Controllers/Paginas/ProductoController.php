<?php

namespace App\Http\Controllers\Paginas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   public function productos(){
   		return view('pages.productos');
   }
}
