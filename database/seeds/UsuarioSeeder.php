<?php
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario'=>'andrewh',
            'ip'=> '192.168.0.13',
            'Estado'=>'Activo',
            'Fecha_Inicio'=>'12/08/2019',
            'Fecha_Fin'=>'15/10/2019',
            'empleados_id_usuario'=>'2',
            'empleados_id_nivel_usuario'=>'1',
            'password'=>bcrypt('12345')
        ]);
    }
}
