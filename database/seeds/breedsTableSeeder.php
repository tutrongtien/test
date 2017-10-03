<?php

use Illuminate\Database\Seeder;

class breedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
        	['id' => 1, 'name' => 'Domestic'],
        	['id' => 2, 'name' => 'Persian'],
        	['id' => 3, 'name' => 'Siameses'],
        	['id' => 4, 'name' => 'Abyssinian'],
        ]);
    }
}
