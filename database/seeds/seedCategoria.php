<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class seedCategoria extends Seeder
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
                'nombre'=>'Entretenimiento',
                'descripcion'=>'Consectetur duis ex cupidatat reprehenderit do exercitation labore nisi sunt nulla.',
                'imagen'=>'categoria.png',
            ],
            [
                'nombre'=>'Comida',
                'descripcion'=>'Consectetur duis ex cupidatat reprehenderit do exercitation labore nisi sunt nulla.',
                'imagen'=>'categoria.png',
            ],
            [
                'nombre'=>'Servicios',
                'descripcion'=>'Consectetur duis ex cupidatat reprehenderit do exercitation labore nisi sunt nulla.',
                'imagen'=>'categoria.png',
            ]
        );
        Categoria::insert($datos);
    }
}
