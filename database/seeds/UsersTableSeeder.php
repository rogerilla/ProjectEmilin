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
                'password'=> 'b8fe8fca65138e2f45c43d30e2b85aa2',
                'edat' => 23,
                'nComentaris' => 0,
                'categoria' => 'administrador',        
            ]
            
        );
        User::insert($data);
    }
    
}
