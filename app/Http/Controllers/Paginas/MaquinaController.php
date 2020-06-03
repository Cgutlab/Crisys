<?php

namespace App\Http\Controllers\Paginas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
   public function index(){

   		return view('pages.maquinas');
   }

   public function buscarMaquinaPorId($id = null){

   		return view('pages.desc-maquina');
   }
}
