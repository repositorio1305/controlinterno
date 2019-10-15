<?php

use Illuminate\Database\Seeder;

class TablaEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo=[
            'Lider de proyecto',
            'Especialista senior',
            'Especialista',
            'Consultor'
        ];
        foreach($cargo as $key => $value){
            DB::table('cargos')->insert([
                'cargo'=>$value,
                'created_at'=> Carbon::now()->format('Y-m-d H:i;s')
            ]);
        }
    
    }
}
