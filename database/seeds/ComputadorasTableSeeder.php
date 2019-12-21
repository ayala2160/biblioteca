<?php

use Illuminate\Database\Seeder;

class ComputadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Computadora::create(['marca' => 'Toshiba', 'modelo_pc' => 'NB100']);
        App\Computadora::create(['marca' => 'Samsung', 'modelo_pc' => 'SMG10']);
    }
}
