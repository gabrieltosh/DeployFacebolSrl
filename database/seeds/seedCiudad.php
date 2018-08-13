<?php

use Illuminate\Database\Seeder;
use App\Ciudad;
class seedCiudad extends Seeder
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
                'nombre'=>'La Paz',
                'pais_id'=>1,
            ]
        );
        Ciudad::insert($datos);
    }
}
