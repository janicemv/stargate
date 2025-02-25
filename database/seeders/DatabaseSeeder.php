<?php

namespace Database\Seeders;

use App\Models\Behenian;
use App\Models\StarMagic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Aileen',
            'email' => 'aileen.daw@gmail.com'
        ]);

        User::factory()->create([
            'name' => 'Unknown',
            'email' => 'unknown@user.com',
        ]);

        $this->call(ConstellationSeeder::class);
        $this->call(StarSeeder::class);
        $this->call(StarsMergedSeeder::class);
        $this->call(KeywordSeeder::class);
        $this->call(StarMagicSeeder::class);
        $this->call(StarSymbolSeeder::class);
    }
}
