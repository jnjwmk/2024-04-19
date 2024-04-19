<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            'author_id' => 1,
            'title' => '桃太郎'
        ];
        DB::table('book')->insert($book);
        $book = [
            'author_id' => 2,
            'title' => '白雪姫'
        ];
        DB::table('book')->insert($book);
        $book =[
            'author_id' => 3,
            'title' => ''
        ];
        DB::table('book')->insert($book);
    }
}
