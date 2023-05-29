<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('dbseeder.comics');

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();

            // $artists = [];
            // foreach ($comicData['artists'] as $artist) {
            //     $artists[] = ['name' => $artist];
            // }
            // $comic->artists()->createMany($artists);

            // $writers = [];
            // foreach ($comicData['writers'] as $writer) {
            //     $writers[] = ['name' => $writer];
            // }
            // $comic->writers()->createMany($writers);
        }
    }
}
