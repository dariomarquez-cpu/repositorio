<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentos')->insert([
            'titulo' => 'Fundamentos de Laravel',
            'autor'  => 'Dario Marquez',
            'descripcion' => 'Libro sobre introduccion a laravel',
            'ubicacion' => '/pdf/El_lenguaje_C.pdf',
            'portada' => '/imagenes/libro.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('documentos')->insert([
            'titulo' => 'Introduccion a Java',
            'autor'  => 'David Gauto',
            'descripcion' => 'Libro sobre introduccion a Java',
            'ubicacion' => '/pdf/El_lenguaje_C.pdf',
            'portada' => '/imagenes/libro.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('documentos')->insert([
            'titulo' => 'Introduccion a PHP',
            'autor'  => 'Luis Galeano',
            'descripcion' => 'Libro sobre introduccion a PHP',
            'ubicacion' => '/pdf/El_lenguaje_C.pdf',
            'portada' => '/imagenes/libro.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('documentos')->insert([
            'titulo' => 'Respositorio Digital Institucional',
            'autor'  => 'Fernando Ortellado ',
            'descripcion' => 'Trabajo fin de carrera',
            'ubicacion' => '/pdf/El_lenguaje_C.pdf',
            'portada' => '/imagenes/libro.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
