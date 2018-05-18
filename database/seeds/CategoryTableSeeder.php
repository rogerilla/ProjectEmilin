<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
class CategoryTableSeeder extends Seeder
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
                'nom'=>'Terror',
            ],
            [
                'nom'=>'Amor'
            ],
           [
               'nom'=>'Comedia'
           ]
            
        );
        Category::insert($data);
    }
}
