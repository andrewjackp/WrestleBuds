<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Wrestler;
use app\Models\Promotion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->title(),
            'promotion_id' => Promotion::factory()
        ];
    }
}

/*
    Promotion
        its own info (i.e, name)


    Wrestler    
        its own info
        promotion id

    Bout
        promotion id

    Bout_wrestler
        (junction/pivot/...relationship table)
        
        wrestler_id
        bout_id

        date (come back to later)
        

    Team
        wrestler-id

    Team_wrestler
        wrestler-id
        (identify wrestler/tag-team/trio etc)
*/

// Bouts 
// promotion assigned to it


// together->wrestler-promotions
// loop through wrestlers in promotion
// print bout competitors/wrestlers