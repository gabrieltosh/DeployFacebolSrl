<?php

use Illuminate\Database\Seeder;
use App\Empresa;
use Carbon\Carbon;
class seedEmpresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array([
                'ciudad_id'=>1,
                'nombre'=>'La Pampa de Huajchilla',
                'descripcion'=>'Carnes a la parrilla, cordero y chancho a la cruz, matambre a la parrilla, trucha a la parrilla, buffet de ensaladas, variedad de vinos y jarras de sangria.',
                'telefono'=>'1234567',
                'email'=>'pampa@gmail.com',
                'facebook'=>'https://facebook.com/1',
                'promocion'=>'20% de descuento en todos los platos',
                'descuento'=>'20% de descuento',
                'web'=>'https://huajchill2a.com',
                'direccion'=>' Av. principal de Huajchilla, frente a la cancha.',
                'horario'=>'De lunes a domingo de 9:00 a 17:00',
                'imagen'=>'pampa.png',
                'categoria_id'=>2,
                'activo'=>1,
                'cod_face'=>'13149840FB',
                'usuario_id'=>1,
                'video'=>'nGaRd3Kndxc'
            ],
            [
                'ciudad_id'=>1,
                'nombre'=>'Accesorios CRISMAR',
                'descripcion'=>'Venta de accesorios, cables, conectores, antenas y mucho más',
                'telefono'=>'70536106',
                'email'=>'pampa1@gmail.com',
                'promocion'=>'20% de descuento en todos los platos',
                'descuento'=>'20% de descuento',
                'facebook'=>'https://facebook.com/2',
                'direccion'=>'Calle L. de la Vega entre c/Hermanas de Sta Cruz y Avenida Chacaltaya.',
                'activo'=>1,
                'horario'=>'Jueves y domingo de 8:00 a 19:00',
                'web'=>'https://huajchilla.com',
                'imagen'=>'crismar.png',
                'categoria_id'=>2,
                'cod_face'=>'13149840FB',
                'usuario_id'=>1,
                'video'=>'nGaRd3Kndxc'
            ],
            [
                'ciudad_id'=>1,
                'nombre'=>'Mundo Digital',
                'descripcion'=>'Colección de cursos, series, animes, películas, documentales, etc. Para todos los gustos y criterios,, copia en dvd, disco duro, Usb.',
                'telefono'=>'70536106',
                'email'=>'pamp2a@gmail.com',
                'promocion'=>'20% de descuento en cualquier producto',
                'descuento'=>'20% de Descuento',
                'activo'=>1,
                'facebook'=>'https://facebook.com/3',
                'direccion'=>'Calle',
                'horario'=>'Atención permanente en la pagina de facebook',
                'web'=>'https://huajchilla2.com',
                'imagen'=>'mundo.png',
                'categoria_id'=>1,
                'cod_face'=>'13149840FB',
                'usuario_id'=>1,
                'video'=>'nGaRd3Kndxc'
            ],
            [
                'ciudad_id'=>1,
                'nombre'=>'Designer Graphic',
                'descripcion'=>'Enfocados en crear, explotar y potenciar el éxito de tu marca. Ofreciendo servicios de diseño gráfico.',
                'telefono'=>'69796414',
                'email'=>'pampa3@gmail.com',
                'promocion'=>'20% de descuento en cualquier servicio',
                'descuento'=>'20% de Descuento',
                'facebook'=>'https://facebook.com',
                'direccion'=>'Obrajes, calle 26. La Paz - Bolivia.',
                'horario'=>'De lunes a viernes de 8:00 a 23:00',
                'web'=>'https://huajchilla3.com',
                'imagen'=>'grapic.png',
                'categoria_id'=>3,
                'cod_face'=>'13149840FB',
                'usuario_id'=>1,
                'activo'=>1,
                'video'=>'nGaRd3Kndxc'
            ]
        );
        Empresa::insert($datos);
    }
}
