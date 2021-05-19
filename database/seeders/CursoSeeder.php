<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->nombre = "laravel";
        $curso->descripcion = "php framework";
        $curso->categoria = "web development";

        $curso->save();
    }
}
