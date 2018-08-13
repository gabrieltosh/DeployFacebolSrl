<?php

use Illuminate\Database\Seeder;
use App\Pais;
class seedPais extends Seeder
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
                'nombre'=>'Bolivia',
            ]
        );
        Pais::insert($datos);
    }
}
