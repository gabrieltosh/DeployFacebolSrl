<?php

use Illuminate\Database\Seeder;
use App\Equipo;
class seedEquipo extends Seeder
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
                'nombre'=>'Ing. Luis Fernando Ilaquita Fernandez',   
                'cargo'=>'Presidente y Ceo Fundador',
                'imagen'=>'luis.jpg',
                'facebook'=>'facebook.com',
                'twitter'=>'twitter.com',
                'instagram'=>'instagram.com',
                'descripcion'=>'Docente Universitario, Conferencista, Inversionista y Empresario, condecorado con la medalla de Honor al Mérito Educativo por la cámara de Diputados del Estado Plurinacional de Bolivia.',
            ],
            [
                'nombre'=>'Lic. Pamela Paola Ilaquita Fernandez',
                'cargo'=>'Socio Accionista',
                'imagen'=>'pamela.jpg',
                'facebook'=>'facebook.com',
                'twitter'=>'twitter.com',
                'instagram'=>'instagram.com',
                'descripcion'=>'Coordinadora y Directora en entidades públicas y privadas, experta en proyectos educativos.',
            ],
            [
                'nombre'=>'Lic. Ruth Nina Callisaya',   
                'cargo'=>'Socio Fundadora',
                'imagen'=>'Ruth.jpg',
                'facebook'=>'facebook.com',
                'twitter'=>'twitter.com',
                'instagram'=>'instagram.com',
                'descripcion'=>'Interprete Trilingüe y asesora de turismo nacional e internacional.',
            ],
        );
        Equipo::insert($datos);
    }
}
