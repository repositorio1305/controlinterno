<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TablaLenguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lenguaje=[
            'Java',
            'JavaScript',
            'PHP',
            'JavaSpring'
        ];
        foreach($lenguaje as $key => $value){
            DB::table('lenguajes')->insert([
                'nombre_lenguaje'=>$value,
            ]);
        }
    }
}
