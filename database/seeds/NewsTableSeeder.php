<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Новость 1',
            'announce' => 'Аннонс новости 1',
            'text' => 'Детальный текст новости 1',
            'picture' => 'picture',
            'date' => '12-07-2018',
        ],
            [
                'title' => 'Новость 2',
                'announce' => 'Аннонс новости 2',
                'text' => 'Детальный текст новости 2',
                'picture' => 'picture',
                'date' => '12-07-2018',
            ],
            [
                'title' => 'Новость 3',
                'announce' => 'Аннонс новости 3',
                'text' => 'Детальный текст новости 3',
                'picture' => 'picture',
                'date' => '12-07-2018',
            ]);
    }
}
