<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __invoke(){

        $cursos = Curso::paginate(5);

        return view('home' , compact("cursos"));

    }
}
