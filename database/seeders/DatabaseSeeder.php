<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Wrestler;
use App\Models\Bout;
use App\Models\Promotion;
use App\Models\BoutWrestler;

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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Article::factory()->create([
            'title' => 'Cena wins',
            'content' => 'He won of course.'
        ]);


        Promotion::factory()
            ->count(4)
            ->has(Wrestler::factory()->count(rand(3,7)))
            ->create();
            

        Wrestler::factory()->create([
            'name' => 'Steve Austin',
            'promotion_id' => 1,
        ]);

        $bouts = Bout::factory()
            ->count(6)
            ->create();


        foreach($bouts as $bout) {
            BoutWrestler::factory()->count(2)->create([
                'bout_id' => $bout->id,
                'wrestler_id' => Wrestler::factory()
            ]);
        };  
    }
}
