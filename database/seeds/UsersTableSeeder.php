<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Rungtip";
        $user->username = "RT";
        $user->email = "Rungtip_PR@hotmail.com";
        $user->password = bcrypt ('1234');
        $user->save();//INSERT การใส่ข้อมูล



    }
}
