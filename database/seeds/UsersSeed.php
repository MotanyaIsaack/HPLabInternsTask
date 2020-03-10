<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
          ['name'=> 'admin', 'email'=>'admin@gmail.com', 'address'=>'Maple Str', 'roleID' => 1, 'suspended'=> 0, 'password'=> Hash::make('123')]
        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'] ,
                'email' => $user['email'] ,
                'address' => $user['address'] ,
                'user_role_id' => $user['roleID'] ,
                'suspended' =>  $user['suspended'] ,
                'password' =>  $user['password'] ,
            ]);
        }
       
    }
}
