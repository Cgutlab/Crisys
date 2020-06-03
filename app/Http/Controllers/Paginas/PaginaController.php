<?php

namespace App\Http\Controllers\Paginas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaginaController extends Controller
{
    public function home(){
    	return view('pages.home');
    }
}
