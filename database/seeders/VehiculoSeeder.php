<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculo = new Vehiculo();
        $vehiculo->id= 1;
        $vehiculo->marca= "Volkswagen";
        $vehiculo->modelo= "A3";
        $vehiculo->nombre= "Jetta";
        $vehiculo->save();

        $vehiculo1 = new Vehiculo();
        $vehiculo1->id= 2;
        $vehiculo1->marca= "Volkswagen";
        $vehiculo1->modelo= "Berlina";
        $vehiculo1->nombre= "Polo";
        $vehiculo1->save();

        $vehiculo2 = new Vehiculo();
        $vehiculo2->id= 3;
        $vehiculo2->marca= "Volkswagen";
        $vehiculo2->modelo= "Todoterreno";
        $vehiculo2->nombre= "Touareg";
        $vehiculo2->save();
        
        $vehiculo3 = new Vehiculo();
        $vehiculo3->id= 4;
        $vehiculo3->marca= "Volkswagen";
        $vehiculo3->modelo= "MI 2005";
        $vehiculo3->nombre= "Derby";
        $vehiculo3->save();

        $vehiculo4 = new Vehiculo();
        $vehiculo4->id= 5;
        $vehiculo4->marca= "AUDI";
        $vehiculo4->modelo= "A5";
        $vehiculo4->nombre= "Cabrio";
        $vehiculo4->save();
        
        $vehiculo5 = new Vehiculo();
        $vehiculo5->id= 6;
        $vehiculo5->marca= "AUDI";
        $vehiculo5->modelo= "TTS";
        $vehiculo5->nombre= "Coupé";
        $vehiculo5->save();

        $vehiculo6 = new Vehiculo();
        $vehiculo6->id= 7;
        $vehiculo6->marca= "BMW";
        $vehiculo6->modelo= "Z4";
        $vehiculo6->nombre= "Cabrio";
        $vehiculo6->save();

        $vehiculo7 = new Vehiculo();
        $vehiculo7->id= 8;
        $vehiculo7->marca= "BMW";
        $vehiculo7->modelo= "i3";
        $vehiculo7->nombre= "Berlina";
        $vehiculo7->save();

        $vehiculo8 = new Vehiculo();
        $vehiculo8->id= 9;
        $vehiculo8->marca= "CHEVROLET";
        $vehiculo8->modelo= "Sedán 1.2 16v LT";
        $vehiculo8->nombre= "AVEO";
        $vehiculo8->save();

        $vehiculo9 = new Vehiculo();
        $vehiculo9->id= 10;
        $vehiculo9->marca= "CHEVROLET";
        $vehiculo9->modelo= "SS 2010";
        $vehiculo9->nombre= "Camaro";
        $vehiculo9->save();

        $vehiculo10 = new Vehiculo();
        $vehiculo10->id= 11;
        $vehiculo10->marca= "FERRARI";
        $vehiculo10->modelo= "T 2015";
        $vehiculo10->nombre= "California";
        $vehiculo10->save();

        $vehiculo11 = new Vehiculo();
        $vehiculo11->id= 12;
        $vehiculo11->marca= "FERRARI";
        $vehiculo11->modelo= "GTC4";
        $vehiculo11->nombre= "Berlina";
        $vehiculo11->save();

        $vehiculo12 = new Vehiculo();
        $vehiculo12->id= 13;
        $vehiculo12->marca= "FERRARI";
        $vehiculo12->modelo= "F12";
        $vehiculo12->nombre= "Coupé";
        $vehiculo12->save();

        $vehiculo13 = new Vehiculo();
        $vehiculo13->id= 14;
        $vehiculo13->marca= "FORD";
        $vehiculo13->modelo= "ST line";
        $vehiculo13->nombre= "Focus";
        $vehiculo13->save();

        $vehiculo14 = new Vehiculo();
        $vehiculo14->id= 15;
        $vehiculo14->marca= "FORD";
        $vehiculo14->modelo= "GT Premium Fastback 2021";
        $vehiculo14->nombre= "Mustang";
        $vehiculo14->save();

        $vehiculo15 = new Vehiculo();
        $vehiculo15->id= 16;
        $vehiculo15->marca= "FORD";
        $vehiculo15->modelo= "EcoBoost MHEV ST";
        $vehiculo15->nombre= "Fiesta";
        $vehiculo15->save();

        $vehiculo16 = new Vehiculo();
        $vehiculo16->id= 17;
        $vehiculo16->marca= "FORD";
        $vehiculo16->modelo= "Titanium";
        $vehiculo16->nombre= "Edge";
        $vehiculo16->save();

        $vehiculo17 = new Vehiculo();
        $vehiculo17->id= 18;
        $vehiculo17->marca= "HONDA";
        $vehiculo17->modelo= "Turing";
        $vehiculo17->nombre= "Civic";
        $vehiculo17->save();

        $vehiculo18 = new Vehiculo();
        $vehiculo18->id= 19;
        $vehiculo18->marca= "HONDA";
        $vehiculo18->modelo= "2.0i‑VTEC Luxury Aut.";
        $vehiculo18->nombre= "Accord";
        $vehiculo18->save();

        $vehiculo19 = new Vehiculo();
        $vehiculo19->id= 20;
        $vehiculo19->marca= "JEEP";
        $vehiculo19->modelo= "STR";
        $vehiculo19->nombre= "Cherokee";
        $vehiculo19->save();
        
        $vehiculo20 = new Vehiculo();
        $vehiculo20->id= 21;
        $vehiculo20->marca= "Nissan";
        $vehiculo20->modelo= "2013";
        $vehiculo20->nombre= "Tsuru";
        $vehiculo20->save();

        $vehiculo21 = new Vehiculo();
        $vehiculo21->id= 22;
        $vehiculo21->marca= "Nissan";
        $vehiculo21->modelo= "2013";
        $vehiculo21->nombre= "Tsubame";
        $vehiculo21->save();

        $vehiculo22 = new Vehiculo();
        $vehiculo22->id= 23;
        $vehiculo22->marca= "Chevrolet";
        $vehiculo22->modelo= "STR";
        $vehiculo22->nombre= "Matiz";
        $vehiculo22->save();

        $vehiculo23 = new Vehiculo();
        $vehiculo23->id= 24;
        $vehiculo23->marca= "Chevrolet";
        $vehiculo23->modelo= "STR";
        $vehiculo23->nombre= "Chevy";
        $vehiculo23->save();

        $vehiculo24 = new Vehiculo();
        $vehiculo24->id= 25;
        $vehiculo24->marca= "Nissan";
        $vehiculo24->modelo= "2013";
        $vehiculo24->nombre= "March";
        $vehiculo24->save();

        $vehiculo25 = new Vehiculo();
        $vehiculo25->id= 26;
        $vehiculo25->marca= "Volkswagen";
        $vehiculo25->modelo= "Berlina";
        $vehiculo25->nombre= "Pointer";
        $vehiculo25->save();

        $vehiculo26 = new Vehiculo();
        $vehiculo26->id= 27;
        $vehiculo26->marca= "Hyundai";
        $vehiculo26->modelo= "Grand";
        $vehiculo26->nombre= "Grand";
        $vehiculo26->save();

        $vehiculo27 = new Vehiculo();
        $vehiculo27->id= 28;
        $vehiculo27->marca= "Nissan";
        $vehiculo27->modelo= "2000";
        $vehiculo27->nombre= "Platina";
        $vehiculo27->save();

        $vehiculo28 = new Vehiculo();
        $vehiculo28->id= 29;
        $vehiculo28->marca= "FORD";
        $vehiculo28->modelo= "-";
        $vehiculo28->nombre= "Figo";
        $vehiculo28->save();

        $vehiculo29 = new Vehiculo();
        $vehiculo29->id= 30;
        $vehiculo29->marca= "Volkswagen";
        $vehiculo29->modelo= "2008";
        $vehiculo29->nombre= "Gol";
        $vehiculo29->save();

        $vehiculo30 = new Vehiculo();
        $vehiculo30->id= 31;
        $vehiculo30->marca= "Fiat";
        $vehiculo30->modelo= "Palio";
        $vehiculo30->nombre= "Strada";
        $vehiculo30->save();

        $vehiculo31 = new Vehiculo();
        $vehiculo31->id= 32;
        $vehiculo31->marca= "Chevorlet";
        $vehiculo31->modelo= "Corsa";
        $vehiculo31->nombre= "Corsa";
        $vehiculo31->save();

        $vehiculo32 = new Vehiculo();
        $vehiculo32->id= 33;
        $vehiculo32->marca= "Toyota";
        $vehiculo32->modelo= "2010";
        $vehiculo32->nombre= "Avanza";
        $vehiculo32->save();

        
        $vehiculo33 = new Vehiculo();
        $vehiculo33->id= 34;
        $vehiculo33->marca= "Peugeot";
        $vehiculo33->modelo= "-mt";
        $vehiculo33->nombre= "207";
        $vehiculo33->save();

        $vehiculo34 = new Vehiculo();
        $vehiculo34->id= 35;
        $vehiculo34->marca= "Nissan";
        $vehiculo34->modelo= "2010";
        $vehiculo34->nombre= "Pick-up";
        $vehiculo34->save();
    }
}
