<?php

namespace Database\Seeders;

use App\Models\Keyword;
use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeywordAssociator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stars = Star::all();

        foreach ($stars as $star) {
            $keywords = Keyword::inRandomOrder()->take(3)->pluck('id');

            $star->keywords()->attach($keywords);
        }
    }
}
