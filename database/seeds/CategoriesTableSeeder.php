<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            'name' => 'văn học',
            'description' => 'sách văn học',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'nghệ thuật',
            'description' => 'sách nghệ thuât',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'lập trình',
            'description' => 'sách lập trình',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => "thiếu nhi",
            'description' => 'sách thiếu nghi',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'tạp chí',
            'description' => 'sách tạp chí',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'truyện tranh',
            'description' => 'sách truyện tranh',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'tieur thuyết',
            'description' => 'sách tieeur thuyết',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'văn ngôn tình',
            'description' => 'sách ngôn tình',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'giáo dục',
            'description' => 'sách giáo dục',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'tiểu thuyết nước ngoài',
            'description' => 'sách tieeur thuyết nước ngoài',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'khoa học',
            'description' => 'sách khoa học',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'thiên văn học',
            'description' => 'sách thiên văn học',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'động vật',
            'description' => 'sách động vật học',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'lịch sử',
            'description' => 'sách lịch sử',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'văn học',
            'description' => 'sách văn học',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'Thơ',
            'description' => 'tuyển tập thơ',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'nấu ăn',
            'description' => 'sách dạy nấu ăn',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'về các tôn giáo',
            'description' => 'sách về các tôn giáo',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'chính trị',
            'description' => 'sách chính trị',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
        DB::table('categories')->insert([
            'name' => 'hết nghĩ nổi tên rồi',
            'description' => 'sách hết tên để nghĩ rồi',
            'depth'=>1,
            'slug'=>'uyen',
        ]);
    }
}
