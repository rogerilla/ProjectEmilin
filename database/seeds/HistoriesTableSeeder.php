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
                'usuari'=>2,
                'titol'=> 'La pesca de la truita',
                'id_categoria'=> 2,
                'resum'=>'2Aquesta és una historia sobre un pescador, aconseguira pescar la truita?',
               'contingut'=> '2Hi habia una vegada un noi que pescava una truita, aquesta truita es pescava molt be'
               . 'i un dia una truita magica li va dir que li donava un carmel'
                . 'ell va acceptar, i es van fer amics. Fin',
                'finalitzacio'=> true
            ],
            [
                'usuari'=>3,
                'titol'=> 'La pesca de la truita2',
                'id_categoria'=> 3,
                'resum'=>'3Aquesta és una historia sobre un pescador, aconseguira pescar la truita?',
                'contingut'=> '3Hi habia una vegada un noi que pescava una truita, aquesta truita es pescava molt be'
                . 'i un dia una truita magica li va dir que li donava un carmel'
                . 'ell va acceptar, i es van fer amics. Fin',
                'finalitzacio'=> true
            ],
            [
                'usuari'=>3,
                'titol'=> 'La pesca de la truita3',
                'id_categoria'=> 3,
                'resum'=>'4Aquesta és una historia sobre un pescador, aconseguira pescar la truita?',
                'contingut'=> '4Hi habia una vegada un noi que pescava una truita, aquesta truita es pescava molt be'
                . 'i un dia una truita magica li va dir que li donava un carmel'
                . 'ell va acceptar, i es van fer amics. Fin',
                'finalitzacio'=> true
            ],
            [
                'usuari'=>2,
                'titol'=> 'La pesca de la truita4',
                'id_categoria'=> 3,
                'resum'=>'5Aquesta és una historia sobre un pescador, aconseguira pescar la truita?',
                'contingut'=> '5Hi habia una vegada un noi que pescava una truita, aquesta truita es pescava molt be'
                . 'i un dia una truita magica li va dir que li donava un carmel'
                . 'ell va acceptar, i es van fer amics. Fin',
                'finalitzacio'=> true
            ]
            
        );
        Histories::insert($data);
    }
}
