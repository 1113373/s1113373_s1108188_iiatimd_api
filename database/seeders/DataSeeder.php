<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use App\Traits\Uuids;

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
            'english' => 'One',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '二',
            'hiragana' => 'に',
            'romaji' => 'ni',
            'english' => 'Two',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '三',
            'hiragana' => 'さん',
            'romaji' => 'san',
            'english' => 'Three',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '四',
            'hiragana' => 'よん',
            'romaji' => 'yon',
            'english' => 'Four',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '五',
            'hiragana' => 'ご',
            'romaji' => 'go',
            'english' => 'Five',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '六',
            'hiragana' => 'ろく',
            'romaji' => 'roku',
            'english' => 'Six',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '七',
            'hiragana' => 'なな',
            'romaji' => 'nana',
            'english' => 'Seven',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '八',
            'hiragana' => 'はち',
            'romaji' => 'hachi',
            'english' => 'Eight',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '九',
            'hiragana' => 'きゅ',
            'romaji' => 'kyu',
            'english' => 'Nine',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '十',
            'hiragana' => 'じゅう',
            'romaji' => 'juu',
            'english' => 'Ten',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '百',
            'hiragana' => 'ひゃく',
            'romaji' => 'hyaku',
            'english' => 'Hundred',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '千',
            'hiragana' => 'せん',
            'romaji' => 'sen',
            'english' => 'Thousand',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '万',
            'hiragana' => 'まん',
            'romaji' => 'man',
            'english' => 'Ten Thousand',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '円',
            'hiragana' => 'えん',
            'romaji' => 'en',
            'english' => 'Circle; Yen',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '曜',
            'hiragana' => 'よう',
            'romaji' => 'you',
            'english' => 'Days of the week',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '週',
            'hiragana' => 'しゅう',
            'romaji' => 'shuu',
            'english' => 'Week',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '年',
            'hiragana' => 'ねん',
            'romaji' => 'nen',
            'english' => 'Year; Age',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '日',
            'hiragana' => 'ひ',
            'romaji' => 'hi',
            'english' => 'Sun; Day; Counter for days',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '月',
            'hiragana' => 'つき',
            'romaji' => 'tsuki',
            'english' => 'Moon; Month',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '火',
            'hiragana' => 'ひ',
            'romaji' => 'hi',
            'english' => 'Fire',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '水',
            'hiragana' => 'みず',
            'romaji' => 'mizu',
            'english' => 'Water',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '木',
            'hiragana' => 'き',
            'romaji' => 'ki',
            'english' => 'Tree, Wood',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '金',
            'hiragana' => 'きん',
            'romaji' => 'kin',
            'english' => 'Gold, Metal, Money',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '土',
            'hiragana' => 'つち',
            'romaji' => 'tsuchi',
            'english' => 'Earth, Soil',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '午',
            'hiragana' => 'ご',
            'romaji' => 'go',
            'english' => 'Noon',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '今',
            'hiragana' => 'いま',
            'romaji' => 'ima',
            'english' => 'Now, The Present',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '分',
            'hiragana' => 'ぶん',
            'romaji' => 'bun',
            'english' => 'To divide; Portion; Minute',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '半',
            'hiragana' => 'はん',
            'romaji' => 'han',
            'english' => 'Half',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '毎',
            'hiragana' => 'まい',
            'romaji' => 'mai',
            'english' => 'Every, Each',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '何',
            'hiragana' => 'なに',
            'romaji' => 'nani',
            'english' => 'What, How many',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '時',
            'hiragana' => 'とき',
            'romaji' => 'toki',
            'english' => 'Time',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '計',
            'hiragana' => 'けい',
            'romaji' => 'kei',
            'english' => 'to Measure; to Plan; to Arrange',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '間',
            'hiragana' => 'かん、けん',
            'romaji' => 'kan, ken',
            'english' => 'Between; Space; Interval',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '男',
            'hiragana' => 'おとこ',
            'romaji' => 'otoko',
            'english' => 'Man, Male',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '女',
            'hiragana' => 'おんあ',
            'romaji' => 'onna',
            'english' => 'Woman, Female',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '父',
            'hiragana' => 'ちち',
            'romaji' => 'chichi',
            'english' => 'Father',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '母',
            'hiragana' => 'はは',
            'romaji' => 'haha',
            'english' => 'Mother',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '子',
            'hiragana' => 'こ',
            'romaji' => 'ko',
            'english' => 'Child',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '友',
            'hiragana' => 'とも',
            'romaji' => 'tomo',
            'english' => 'Friend',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '人',
            'hiragana' => 'ひと',
            'romaji' => 'hito',
            'english' => 'Person',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '手',
            'hiragana' => 'て',
            'romaji' => 'te',
            'english' => 'Hand',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '目',
            'hiragana' => 'め',
            'romaji' => 'me',
            'english' => 'Eye',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '足',
            'hiragana' => 'あし',
            'romaji' => 'ashi',
            'english' => 'Foot, Leg',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '耳',
            'hiragana' => 'みみ',
            'romaji' => 'mimi',
            'english' => 'Ear',
        ]);

        DB::table('data')->insert([
            'id' => Uuid::generate(),
            'kanji' => '口',
            'hiragana' => 'くち',
            'romaji' => 'kuchi',
            'english' => 'Mouth',
        ]);
    }
}
