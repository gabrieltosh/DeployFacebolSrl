<?php

use Illuminate\Database\Seeder;
use App\Planes;
use App\PlanesDetalle;
class seedPlanes extends Seeder
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
                'nombre'=>'Plan Unico',
                'precio'=>250,
                'plan'=>'mensual',
                'moneda'=>'Bs',
            ]
        );
       
        Planes::insert($datos);
       
    }
}
