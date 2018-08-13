<?php

use Illuminate\Database\Seeder;
use App\User;
class seedUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
            [
                'nombre'=>'gabriel angel',
                'apellido'=>'Pinto',
                'direccion'=>'calle1',
                'celular'=>76518845,
                'email'=>'angel22586310@gmail.com',
                'password'=>\Hash::make('123456'),
                'imagen'=>'perfil.jpg',
                'codigo'=>str_random(25),
                'tipo'=>'Sadministrador',
                'activo'=>1,
                'ciudad_id'=>1,
                'ci'=>13149840,
                'cod_face'=>'13149840FB' ,
            ],
            [
                'nombre'=>'Fernando Luis',
                'apellido'=>'Ilaquita',
                'direccion'=>'calle1',
                'celular'=>76266570,
                'email'=>'luisF@gmail.com',
                'password'=>\Hash::make('facebol6194'),
                'imagen'=>'perfil.jpg',
                'codigo'=>str_random(25),
                'tipo'=>'Sadministrador',
                'activo'=>1,
                'ciudad_id'=>1,
                'ci'=>85739202,
                'cod_face'=>'13832932FB',
            ],
            [
                'nombre'=>'luis ',
                'apellido'=>'alvarado',
                'direccion'=>'calle3',
                'celular'=>76518535,
                'email'=>'luis@gmail.com',
                'password'=>\Hash::make('123456'),
                'imagen'=>'perfil.jpg',
                'codigo'=>str_random(25),
                'tipo'=>'Usuario',
                'activo'=>1,
                'ciudad_id'=>1,
                'ci'=>123456,
                'cod_face'=>'123'
            ],

        );
        User::insert($datos);
    }
}
