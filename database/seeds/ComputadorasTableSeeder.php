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
        App\Computadora::create(['marca' => 'Toshiba', 'modelo' => 'NB100']);
        App\Computadora::create(['marca' => 'Samsung', 'modelo' => 'SMG10']);
    }
}
