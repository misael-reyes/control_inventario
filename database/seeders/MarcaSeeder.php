<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new Marca();
        $marca->id= 1;
        $marca->nombre_marca= "Michelin";
        $marca->save();

        $marca2 = new Marca();
        $marca2->id= 2;
        $marca2->nombre_marca= "Uniroyal";
        $marca2->save();

        $marca3 = new Marca();
        $marca3->id= 3;
        $marca3->nombre_marca= "BFGoodrich";
        $marca3->save();

        
    }
}
