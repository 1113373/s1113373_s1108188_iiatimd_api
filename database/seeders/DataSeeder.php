<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '一',
            'hiragana' => 'いち',
            'romaji' => 'ichi',
            'english' => 'one',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '二',
            'hiragana' => 'に',
            'romaji' => 'ni',
            'english' => 'two',
        ]);
        
    }
}
