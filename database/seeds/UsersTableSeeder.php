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
        DB::table('users')->truncate();
        for($i=1;$i<30;$i++){
            DB::table('users')->insert([
                'name' => 'admin'.$i,
                'email' => ''.$i.'admin@gmail.com',
                'password' => bcrypt('secret'),

            ]);
        }
//        DB::table('users')->insert([
//            'name' => 'admod',
//            'email' => 'admod@gmail.com',
//            'password' => bcrypt('secret'),
//
//        ]);
    }
}
