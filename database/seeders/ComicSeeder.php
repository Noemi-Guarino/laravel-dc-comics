<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData =config('comics');

        // dd($comicsData);
        foreach ($comicsData as $index => $singleComicData) {
            $comic = new Comic();
            $comic->title = $singleComicData['title'];
            $comic->description = $singleComicData['description'];
            $comic->src = $singleComicData['thumb'];
            $comic->price = $singleComicData['price'];
            $comic->series =$singleComicData['series'];
            $comic->sale_date =$singleComicData['sale_date'];
            $comic->type =$singleComicData['type'];
            $comic->artists =json_encode($comicsData['artists']);
            $comic->writers =implode(",", $singleComicData['writers']);

            $comic->save();
        }
    }
}
