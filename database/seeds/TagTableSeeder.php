<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'IT用語',
            ],
            [
                'name' => '法律用語',
            ],
            [
                'name' => '名言',
            ]
        ]);
        DB::table('tagmaps')->insert([
            [
                'word_id' => 1,
                'tag_id' => 1
            ],
            [
                'word_id' => 2,
                'tag_id' => 2
            ],
            [
                'word_id' => 2,
                'tag_id' => 3
            ]
        ]);
    }
}
