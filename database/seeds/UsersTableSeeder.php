<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = User::where('email' , 'testeadmin@gmail.com')->first();

            if(!$user){
                User::create([
                    'name' => 'Leandro ramos silva' ,
                    'email' => 'testeadmin@gmail.com' ,
                    'cpf' => '009900999' ,
                    'phone' => '12298337782' ,
                    'adress' => 'teste endereco' ,
                    'password' => Hash::make('123456789'),
                    'role' => 'admin'
                ]);
            }else{
                if($user->role != 'admin'){
                    $user->role = 'admin';
                    $user->save();
                }
            }
        //
    }
}
