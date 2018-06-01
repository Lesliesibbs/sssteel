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
      $user =  SSSTEELE\User::create([
          'name' => 'Admin',
          'email' => 'lesliesibanda123@gmail.com',
          'password' => bcrypt('password'),
          'admin' => 1
        ]);

        SSSTEELE\Profile::create([
          'user_id' =>$user->id,
          'avatar' => 'images/avatar.png',
          'about' =>  'Chief Executive Officer of Shaniel Steele Inventory.'
        ]);    }
}
