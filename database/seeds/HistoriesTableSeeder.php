<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Histories;
class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'usuari'=>'Joan123',
                'titol'=> 'La pesca de la truita',
                'id_categoria'=> 2,
                'contingut'=> 'Hi habia una vegada un noi que pescava una truita, aquesta truita es pescava molt be'
                . 'i un dia una truita magica li va dir que li donava un carmel'
                . 'ell va acceptar, i es van fer amics. Fin',
                'finalitzacio'=> true,
                'nVots'=>2
            ]
            
        );
        Histories::insert($data);
    }
}
