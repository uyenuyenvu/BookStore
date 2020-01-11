<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();
        for($i=0;$i<20;$i++) {
            DB::table('images')->insert([
                'name'=>'uyen.jpg',
                'folder' => 'public/frontend',
                'parent_id' => 1
            ]);
        }
    }
}
