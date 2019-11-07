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
        // PLAYSTATION GAMES
        Game::create([
            'slug' => 'alien-isolation-ps',
            'platform' => 'playstation',
            'name' => 'Alien Isolation', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/alien_isolation.jpeg'
        ]);

        Game::create([
            'slug' => 'battleborn-ps',
            'platform' => 'playstation',
            'name' => 'Battleborn', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/battleborn.jpeg'
        ]);

        Game::create([
            'slug' => 'call-of-duty-advanced-warfare-ps',
            'platform' => 'playstation',
            'name' => 'Call of Duty Advanced Warfare', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/call_of_duty_advanced_warfare.jpeg'
        ]);

        Game::create([
            'slug' => 'dynasty-warriors-8-ps',
            'platform' => 'playstation',
            'name' => 'Dynasty Warriors 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dynasty_warriors8.jpeg'
        ]);

        Game::create([
            'slug' => 'dishonored2-ps',
            'platform' => 'playstation',
            'name' => 'Dishonored 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dishonored2.jpeg'
        ]);

        Game::create([
            'slug' => 'dying-light-ps',
            'platform' => 'playstation',
            'name' => 'Dying Light', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dying_light.jpeg'
        ]);

        Game::create([
            'slug' => 'grand-theft-auto-5-ps',
            'platform' => 'playstation',
            'name' => 'Grand Theft Auto 5', 
            'price' => '£34.99',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.', 
            'image' => '/storage/images/playstation/grand_theft_auto5.jpeg'
        ]);

        Game::create([
            'slug' => 'helldivers-ps',
            'platform' => 'playstation',
            'name' => 'Helldivers', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/helldivers'
        ]);

        
        Game::create([
            'slug' => 'knack-ps',
            'platform' => 'playstation',
            'name' => 'Knack', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/knack.jpeg'
        ]);

        Game::create([
            'slug' => 'payday2-ps',
            'platform' => 'playstation',
            'name' => 'Payday 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/payday2.jpeg'
        ]);

        Game::create([
            'slug' => 'ravens-cry-ps',
            'platform' => 'playstation',
            'name' => 'Ravens Cry', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/ravens_cry.jpeg'
        ]);

        Game::create([
            'slug' => 'steep-ps',
            'platform' => 'playstation',
            'name' => 'Steep', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/steep.jpeg'
        ]);

        // XBOX GAMES
        Game::create([
            'slug' => 'deadrising3-xbox',
            'platform' => 'xbox',
            'name' => 'Deadrising 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/deadrising3.jpeg'
        ]);

        Game::create([
            'slug' => 'mortal-kombat-x-xbox',
            'platform' => 'xbox',
            'name' => 'Mortal Kombat X', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/mortal_kombatx.jpeg'
        ]);

        Game::create([
            'slug' => 'titanfall-2-xbox',
            'platform' => 'xbox',
            'name' => 'Titanfall 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/titanfall2.jpeg'
        ]);

        Game::create([
            'slug' => 'fallout4-xbox',
            'platform' => 'xbox',
            'name' => 'Fallout 4', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fallout4.jpeg'
        ]);

        Game::create([
            'slug' => 'fortnite-xbox',
            'platform' => 'xbox',
            'name' => 'Fortnite', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fortnite.jpeg'
        ]);

        Game::create([
            'slug' => 'grow-up-xbox',
            'platform' => 'xbox',
            'name' => 'Grow Up', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/grow_up.jpeg'
        ]);

        Game::create([
            'slug' => 'hue-xbox',
            'platform' => 'xbox',
            'name' => 'Hue', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/hue.jpeg'
        ]);

        Game::create([
            'slug' => 'necropolis-xbox',
            'platform' => 'xbox',
            'name' => 'Necropolis', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/necropolis.jpeg'
        ]);

        Game::create([
            'slug' => 'rayman-legends-xbox',
            'platform' => 'xbox',
            'name' => 'Rayman Legends', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/rayman_legends.jpeg'
        ]);

        Game::create([
            'slug' => 'roblox-xbox',
            'platform' => 'xbox',
            'name' => 'Roblox', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/roblox.jpeg'
        ]);

        Game::create([
            'slug' => 'warframe-xbox',
            'platform' => 'xbox',
            'name' => 'Warframe', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/warframe.jpeg'
        ]);

        Game::create([
            'slug' => 'zombi-xbox',
            'platform' => 'xbox',
            'name' => 'Zombi', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/zombi.jpeg'
        ]);

        // NINTENDO
        Game::create([
            'slug' => 'arms-nintendo',
            'platform' => 'nintendo',
            'name' => 'Arms', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/arms.jpeg'
        ]);

        Game::create([
            'slug' => 'lumo-nintendo',
            'platform' => 'nintendo',
            'name' => 'Lumo', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/lumo.jpeg'
        ]);

        Game::create([
            'slug' => 'bendy-and-the-ink-machine-nintendo',
            'platform' => 'nintendo',
            'name' => 'Bendy and the Ink Machine', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/bendy_and_the_ink_machine.jpeg'
        ]);

        Game::create([
            'slug' => 'mario-kart-deluxe8-nintendo',
            'platform' => 'nintendo',
            'name' => 'Mario Kart Deluxe 8', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/mario_kart_deluxe8.jpeg'
        ]);

        Game::create([
            'slug' => 'party-planet-nintendo',
            'platform' => 'nintendo',
            'name' => 'Party Planet', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/party_planet.jpeg'
        ]);

        Game::create([
            'slug' => 'celeste-nintendo',
            'platform' => 'nintendo',
            'name' => 'Celeste', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/celeste.jpeg'
        ]);

        Game::create([
            'slug' => 'penny-punching-princess-nintendo',
            'platform' => 'nintendo',
            'name' => 'Penny Punching Princess', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/penny_punching_princess.jpeg'
        ]);

        Game::create([
            'slug' => 'poi-nintendo',
            'platform' => 'nintendo',
            'name' => 'Poi', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/poi.jpeg'
        ]);

        Game::create([
            'slug' => 'rico-nintendo',
            'platform' => 'nintendo',
            'name' => 'Rico', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/rico.jpeg'
        ]);

        Game::create([
            'slug' => 'stardew-valley-nintendo',
            'platform' => 'nintendo',
            'name' => 'Stardew Valley', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/stardew_valley.jpeg'
        ]);

        Game::create([
            'slug' => 'urban-trial-playground-nintendo',
            'platform' => 'nintendo',
            'name' => 'Urban Trial Playground', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/urban_trial_playground.jpeg'
        ]);

        Game::create([
            'slug' => 'wild-guns-reloaded-nintendo',
            'platform' => 'nintendo',
            'name' => 'Wild Guns Reloaded', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/wild_guns_reloaded.jpeg'
        ]);

        // PC GAMES
        Game::create([
            'slug' => 'assassins-creed-brotherhood-pc',
            'platform' => 'pc',
            'name' => 'Assassins Creed Brotherhood', 
            'price' => '£9.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/assassins_creed_brotherhood.jpeg'
        ]);

        Game::create([
            'slug' => 'breath-of-fire4-pc',
            'platform' => 'pc',
            'name' => 'Breath of Fire 4', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/breath_of_fire4.jpeg'
        ]);

        Game::create([
            'slug' => 'bulletstorm-pc',
            'platform' => 'pc',
            'name' => 'Bulletstorm', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/bulletstorm.jpeg'
        ]);

        Game::create([
            'slug' => 'cold-fear-pc',
            'platform' => 'pc',
            'name' => 'Cold Fear', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/cold_fear.jpeg'
        ]);

        Game::create([
            'slug' => 'dead-space3-pc',
            'platform' => 'pc',
            'name' => 'Dead Space 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/dead_space3.jpeg'
        ]);

        Game::create([
            'slug' => 'flatout-pc',
            'platform' => 'pc',
            'name' => 'Flatout', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/flatout.jpeg'
        ]);

        Game::create([
            'slug' => 'portal2-pc',
            'platform' => 'pc',
            'name' => 'Portal 2', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/portal2.jpeg'
        ]);

        Game::create([
            'slug' => 'prince-of-persia-pc',
            'platform' => 'pc',
            'name' => 'Prince of Persia', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/prince_of_persia.jpeg'
        ]);


        Game::create([
            'slug' => 'resident-evil6-pc',
            'platform' => 'pc',
            'name' => 'Resident Evil 6', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/resident_evil6.jpeg'
        ]);


        Game::create([
            'slug' => 'rocket-league-pc',
            'platform' => 'pc',
            'name' => 'Rocket League', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/rocket_league.jpeg'
        ]);


        Game::create([
            'slug' => 'startreck-pc',
            'platform' => 'pc',
            'name' => 'Startreck', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/startreck.jpeg'
        ]);


        Game::create([
            'slug' => 'torchlight2-pc',
            'platform' => 'pc',
            'name' => 'Torchlight 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/torchlight2.jpeg'
        ]);

    }
}
