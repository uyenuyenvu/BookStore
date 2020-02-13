<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        for($i=1;$i<20;$i++) {
            DB::table('books')->insert([
                'name' => 'book'.$i,
                'content' => 'content cho book'.$i,
                'origin_price' => 200000,
                'sale_price' => 30000,
                'author' => 'uyen',
                'publisher' => 'uyen',
                'category_id'=>$i,
                'user_id'=>19,
                'slug'=>\Illuminate\Support\Str::slug('book'.$i.time()),
                'description'=>'mô tả cho sách',
                'status'=>0,
                'number_pages'=>100,
                'cover_type'=>'cứng',
                'size'=>'40cm x 30cm',
                'supplier'=>'uyên đã cung cấp',
                'number_publish'=>2

            ]);
        }

    }
}
