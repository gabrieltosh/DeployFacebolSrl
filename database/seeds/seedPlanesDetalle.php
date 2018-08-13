<?php

use Illuminate\Database\Seeder;
use App\PlanesDetalle;
class seedPlanesDetalle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descripcion=array(
            [
                'descripcion'=>'Descuentos, promociones y precios especiales en todas tus compras dentro de las empresas y negocios de convenio.',
                'planes_id'=>1,
            ],
            [
                'descripcion'=>'Capacitación en relaciones humanas, ventas, marketing, liderazgo, educación e inteligencia financiera.',
                'planes_id'=>1,
            ],
            [
                'descripcion'=>'Oportunidad de ascender y asumir cargos y funciones según tu formación.',
                'planes_id'=>1,
            ],
            [
                'descripcion'=>'Ganas el 100% de lo generado, sin descuentos. ',
                'planes_id'=>1,
            ],
            [
                'descripcion'=>'Incentivos, viajes, bonos, ascensos, cursos y mucho más.',
                'planes_id'=>1,
            ]
        );
        PlanesDetalle::insert($descripcion);
    }
}
