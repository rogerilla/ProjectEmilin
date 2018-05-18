<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UsersTableSeeder extends Seeder
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
               'name' => 'Frila',
                'email'=> 'Frila@gmail.com',
                'password'=> '1234%&/(',
                'edat' => 23,
                'nComentaris' => 0,
                'categoria' => 'administrador',        
            ],
            [
                'name' => 'Joanet',
                'email'=> 'Joanet@gmail.com',
                'password'=> '1234%&/(',
                'edat' => 20,
                'nComentaris' => 0,
                'categoria' => 'usuari',        
            ]
            
        );
        User::insert($data);
    }
    
}
