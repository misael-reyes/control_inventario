<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Proveedor();
        $p->id = 1;
        $p->nombre = "Bridgestone S.A. de S.V.";
        $p->num_telefono = "9514484910";
        $p->e_mail = "bridgstone@gmail.com";
        $p->direccion_calle = "Independencia";
        $p->direccion_colonia = "Reforma";
        $p->direccion_numero = 65;
        $p->direccion_ciudad = "Oaxaca";
        $p->direccion_estado = "Oaxaca";
        $p->save();

        $p1 = new Proveedor();
        $p1->id = 2;
        $p1->nombre = "Michelin S.A. de S.V.";
        $p1->num_telefono = "9514265410";
        $p1->e_mail = "michelin@gmail.com";
        $p1->direccion_calle = "Carrizal";
        $p1->direccion_colonia = "Aldama";
        $p1->direccion_numero = 120;
        $p1->direccion_ciudad = "León";
        $p1->direccion_estado = "Guanajuato";
        $p1->save();

        $p2 = new Proveedor();
        $p2->id = 3;
        $p2->nombre = "Goodyear S.A. de S.V.";
        $p2->num_telefono = "9514409989";
        $p2->e_mail = "goodyear@gmail.com";
        $p2->direccion_calle = "Morelos";
        $p2->direccion_colonia = "Miguel Hidalgo";
        $p2->direccion_numero = 87;
        $p2->direccion_ciudad = "San Martín Texmelucan";
        $p2->direccion_estado = "Puebla";
        $p2->save();

        $p3 = new Proveedor();
        $p3->id = 4;
        $p3->nombre = "Pirelli S.A. de S.V.";
        $p3->num_telefono = "9514488765";
        $p3->e_mail = "pirelli@gmail.com";
        $p3->direccion_calle = "San Marcial";
        $p3->direccion_colonia = "Vicente Guerrero";
        $p3->direccion_numero = 12;
        $p3->direccion_ciudad = "Silao";
        $p3->direccion_estado = "Guanajuato";
        $p3->save();

        $p4 = new Proveedor();
        $p4->id = 5;
        $p4->nombre = "Continental S.A. de S.V.";
        $p4->num_telefono = "9514999910";
        $p4->e_mail = "continental@gmail.com";
        $p4->direccion_calle = "Bicentenario";
        $p4->direccion_colonia = "San Bartolo";
        $p4->direccion_numero = 685;
        $p4->direccion_ciudad = "Ciudad Juárez";
        $p4->direccion_estado = "Chihuahua";
        $p4->save();

        $p5 = new Proveedor();
        $p5->id = 6;
        $p5->nombre = "Unoroyal S.A. de S.V.";
        $p5->num_telefono = "9513451211";
        $p5->e_mail = "uniroyal@gmail.com";
        $p5->direccion_calle = "Independencia";
        $p5->direccion_colonia = "San Bartolo";
        $p5->direccion_numero = 32;
        $p5->direccion_ciudad = "Monterrey";
        $p5->direccion_estado = "Nuevo León";
        $p5->save();
    }
}
