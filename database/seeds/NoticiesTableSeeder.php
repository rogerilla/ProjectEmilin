<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Noticies;
class NoticiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//        $data = array(
//            [
//                'titol'=> 'Benvinguts a la meva pàgina de fanfictions',
//                'noticia'=> 'Aquesta pàgina sera feta per la gent a qui els hi agradi tant escriure com llegir fanfics '
//                . "Tothom es benvingut, pero siusplau respecteu les normes d'us"
//            ]
//        );
        $data = array(
//            [
//                'titol'=> 'Benvinguts a la meva pàgina de fanfictions2',
//                'noticia'=> 'Aquesta pàgina sera feta per la gent a qui els hi agradi tant escriure com llegir fanfics '
//                . "Tothom es benvingut, pero siusplau respecteu les normes d'us"
//            ],
//            [
//                'titol'=> 'Benvinguts a la meva pàgina de fanfictions3',
//                'noticia'=> 'Aquesta pàgina sera feta per la gent a qui els hi agradi tant escriure com llegir fanfics '
//                . "Tothom es benvingut, pero siusplau respecteu les normes d'us"
//            ],
            [
                'titol'=> 'Benvinguts a la meva pàgina de fanfictions4Ultim',
                'noticia'=> 'Aquesta pàgina sera feta per la gent a qui els hi agradi tant escriure com llegir fanfics '
                . "Tothom es benvingut, pero siusplau respecteu les normes d'us"
            ]
        );
        Noticies::insert($data);
    }

}
