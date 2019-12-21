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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Libro::create([
          'titulo' => 'Programación',
        ]);
    }
}
