<?php

use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('libros')->insert([
            'titulo' => 'Bases de datos',
            'autor' => 'Elmasri',
            'categoria' => 'educativo',
            'isbn' => '1029384756',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Libro::create([
          'titulo' => 'Programación',
          'autor' => 'Cairó',
          'categoria' => 'educativo',
          'isbn' => '5647382901',
        ]);
    }
}
