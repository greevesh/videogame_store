<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // playstation games
        Game::create([
            'slug' => 'call-of-duty-advanced-warfare',
            'platform' => 'playstation',
            'name' => 'Call of Duty Advanced Warfare', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'dishonored-2',
            'platform' => 'playstation',
            'name' => 'Dishonored 2', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'dying-light',
            'platform' => 'playstation',
            'name' => 'Dying Light', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'dynasty-warriors-8',
            'platform' => 'playstation',
            'name' => 'Dynasty Warriors 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'grand-theft-auto-5',
            'platform' => 'playstation',
            'name' => 'Grand Theft Auto 5', 
            'price' => '£34.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'mxgp-2',
            'platform' => 'playstation',
            'name' => 'MXGP 2', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);

        Game::create([
            'slug' => 'prey',
            'platform' => 'playstation',
            'name' => 'Prey', 
            'price' => '£24.99',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.', 
        ]);

        Game::create([
            'slug' => 'watchdogs-2',
            'platform' => 'playstation',
            'name' => 'Watchdogs 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
        ]);
    }
}
