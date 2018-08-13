<?php

use Illuminate\Database\Seeder;
use App\Institucion;
use Carbon\Carbon;
class seedInstitucion extends Seeder
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
                'qSomos'=>'Somos FaceBol SRL, una empresa legalmente establecida que se dedica al marketing de productos y servicios, para negocios y empresas a nivel nacional e internacional. Siendo parte de FaceBol obtendrás múltiples beneficios como descuentos y promociones con todas las empresas en convenio. En restaurantes, centros médicos, tiendas de vestir, institutos, universidades, pasajes aéreos, turismo, publicidad, centros comerciales y muchos otros productos y servicios.',
                'frase1'=>'Somos la primera red de beneficios en Bolivia, con más de 10 años de experiencia empresarial. “Somos genuinos y originales”',
                'frase2'=>'Brindamos capacitación en educación financiera real, asesoramiento y apoyo a tu emprendimiento con ejemplos en base a experiencias propias.',
                'frase3'=>'Tenemos convenios no solo con empresas, sino también con negocios reales, según las necesidades de nuestros clientes, pequeñas, medianas y grandes',
                'trabaja'=>'Somos la única empresa que ofrece tantos beneficios juntos:
                 La afiliación a FaceBol es única y te hace miembro de por vida.
                 Te damos capacitación constante en relaciones humanas, ventas, marketing, liderazgo, educación e inteligencia financiera.
                 Te damos la oportunidad de ascender y asumir cargos y funciones según metas establecidas.
                 Ganas el 100% de lo generado, sin descuentos. FaceBol SRL asume los gastos de facturación.
                 Pagos directos a tu cuenta de Banco.
                 Incentivos, viajes, bonos, ascensos, cursos y mucho más.
                 También tienes la oportunidad de vender los productos o servicios de algunas empresas.
                “Y si tienes alguna empresa, negocio o emprendimiento y deseas formar parte de FaceBol, te damos publicidad gratuita por 1 año”.',
                'direccion'=>'Dirección: El Alto - Bolivia, avenida Chacaltaya #50, alto lima 1ra. Sección.',
                'celular'=>'76266570',
                'telefono'=>'76266570',
                'email'=>'gerenciageneral@facebolsrl.com',
                'facebook'=>'https://www.facebook.com/facebolsrl/',
                'twitter'=>'https://www.twitter.com',
                'youtube'=>'https://www.youtube.com',
                'instagram'=>'https://www.instagram.com',
                'google'=>'https://www.google.com',
                'imagen'=>'Logo.png',
                'vision'=>'Ser una de las empresas más reconocidas a nivel nacional e internacional, y poder dar un gran aporte en bien de la sociedad.',
                'mision'=>'Brindar a las personas la oportunidad, de aumentar sus ingresos, reducir sus gastos, e impulsar su educación e inteligencia financiera.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'desEmpresa'=>'FaceBol SRL, ofrece a sus clientes y trabajadores, beneficios con descuentos y promociones en :'
            ]
        );
        Institucion::insert($datos);
    }
}
