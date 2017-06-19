<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'type' => 1,
            'brand' => 'Mercedes',
            'model'=> 'S 550',
            'gradBegin'=>'2005',
            'gradEnd'=>'2013',
            'description'=>'Мерседес преміум-класу 2005-2013 років випуску',
            'img'=>'mercedes_s550_2005_2013.jpg'
        ]);
    }
}
