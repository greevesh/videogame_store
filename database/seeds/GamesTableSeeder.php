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
            'slug' => 'playstation/alien-isolation',
            'platform' => 'playstation',
            'name' => 'Alien Isolation', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/alien_isolation.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/battleborn',
            'platform' => 'playstation',
            'name' => 'Battleborn', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/battleborn.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/call-of-duty-advanced-warfare',
            'platform' => 'playstation',
            'name' => 'Call of Duty Advanced Warfare', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/call_of_duty_advanced_warfare.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/dynasty-warriors8',
            'platform' => 'playstation',
            'name' => 'Dynasty Warriors 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dynasty_warriors8_empires.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/dishonored2',
            'platform' => 'playstation',
            'name' => 'Dishonored 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dishonored2.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/dying-light',
            'platform' => 'playstation',
            'name' => 'Dying Light', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dying_light.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/grand-theft-auto-5',
            'platform' => 'playstation',
            'name' => 'Grand Theft Auto 5', 
            'price' => '£34.99',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.', 
            'image' => '/storage/images/playstation/grand_theft_auto5.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/helldivers',
            'platform' => 'playstation',
            'name' => 'Helldivers', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/helldivers.jpeg'
        ]);

        
        Game::create([
            'slug' => 'playstation/knack',
            'platform' => 'playstation',
            'name' => 'Knack', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/knack.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/payday2',
            'platform' => 'playstation',
            'name' => 'Payday 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/payday2.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/ravens-cry',
            'platform' => 'playstation',
            'name' => 'Ravens Cry', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/ravens_cry.jpeg'
        ]);

        Game::create([
            'slug' => 'playstation/steep',
            'platform' => 'playstation',
            'name' => 'Steep', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/steep.jpeg'
        ]);

        // XBOX GAMES
        Game::create([
            'slug' => 'xbox/deadrising3',
            'platform' => 'xbox',
            'name' => 'Deadrising 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/deadrising3.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/mortal-kombat-x',
            'platform' => 'xbox',
            'name' => 'Mortal Kombat X', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/mortal_kombatx.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/titanfall2',
            'platform' => 'xbox',
            'name' => 'Titanfall 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/titanfall2.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/fallout4',
            'platform' => 'xbox',
            'name' => 'Fallout 4', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fallout4.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/fortnite',
            'platform' => 'xbox',
            'name' => 'Fortnite', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fortnite.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/grow-up',
            'platform' => 'xbox',
            'name' => 'Grow Up', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/grow_up.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/hue',
            'platform' => 'xbox',
            'name' => 'Hue', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/hue.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/necropolis',
            'platform' => 'xbox',
            'name' => 'Necropolis', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/necropolis.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/rayman-legends',
            'platform' => 'xbox',
            'name' => 'Rayman Legends', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/rayman_legends.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/roblox',
            'platform' => 'xbox',
            'name' => 'Roblox', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/roblox.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/warframe',
            'platform' => 'xbox',
            'name' => 'Warframe', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/warframe.jpeg'
        ]);

        Game::create([
            'slug' => 'xbox/zombi',
            'platform' => 'xbox',
            'name' => 'Zombi', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/zombi.jpeg'
        ]);

        // NINTENDO
        Game::create([
            'slug' => 'nintendo/arms',
            'platform' => 'nintendo',
            'name' => 'Arms', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/arms.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/lumo',
            'platform' => 'nintendo',
            'name' => 'Lumo', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/lumo.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/bendy-and-the-ink-machine',
            'platform' => 'nintendo',
            'name' => 'Bendy and the Ink Machine', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/bendy_and_the_ink_machine.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/mario-kart-deluxe8',
            'platform' => 'nintendo',
            'name' => 'Mario Kart Deluxe 8', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/mario_kart_deluxe8.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/party-planet',
            'platform' => 'nintendo',
            'name' => 'Party Planet', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/party_planet.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/celeste',
            'platform' => 'nintendo',
            'name' => 'Celeste', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/celeste.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/penny-punching-princess',
            'platform' => 'nintendo',
            'name' => 'Penny Punching Princess', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/penny_punching_princess.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/poi',
            'platform' => 'nintendo',
            'name' => 'Poi', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/poi.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/rico',
            'platform' => 'nintendo',
            'name' => 'Rico', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/rico.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/stardew-valley',
            'platform' => 'nintendo',
            'name' => 'Stardew Valley', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/stardew_valley.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/urban-trial-playground',
            'platform' => 'nintendo',
            'name' => 'Urban Trial Playground', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/urban_trial_playground.jpeg'
        ]);

        Game::create([
            'slug' => 'nintendo/wild-guns-reloaded',
            'platform' => 'nintendo',
            'name' => 'Wild Guns Reloaded', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/wild_guns_reloaded.jpeg'
        ]);

        // PC GAMES
        Game::create([
            'slug' => 'pc/assassins-creed-brotherhood',
            'platform' => 'pc',
            'name' => 'Assassins Creed Brotherhood', 
            'price' => '£9.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/assassins_creed_brotherhood.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/breath-of-fire4',
            'platform' => 'pc',
            'name' => 'Breath of Fire 4', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/breath_of_fire4.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/bulletstorm',
            'platform' => 'pc',
            'name' => 'Bulletstorm', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/bulletstorm.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/cold-fear',
            'platform' => 'pc',
            'name' => 'Cold Fear', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/cold_fear.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/dead-space3',
            'platform' => 'pc',
            'name' => 'Dead Space 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/dead_space3.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/flatout',
            'platform' => 'pc',
            'name' => 'Flatout', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/flatout.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/portal2',
            'platform' => 'pc',
            'name' => 'Portal 2', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/portal2.jpeg'
        ]);

        Game::create([
            'slug' => 'pc/prince-of-persia',
            'platform' => 'pc',
            'name' => 'Prince of Persia', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/prince_of_persia.jpeg'
        ]);


        Game::create([
            'slug' => 'pc/resident-evil6',
            'platform' => 'pc',
            'name' => 'Resident Evil 6', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/resident_evil6.jpeg'
        ]);


        Game::create([
            'slug' => 'pc/rocket-league',
            'platform' => 'pc',
            'name' => 'Rocket League', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/rocket_league.jpeg'
        ]);


        Game::create([
            'slug' => 'pc/star-treck',
            'platform' => 'pc',
            'name' => 'Star Treck', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/star_treck.jpeg'
        ]);


        Game::create([
            'slug' => 'pc/torchlight2',
            'platform' => 'pc',
            'name' => 'Torchlight 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/torchlight2.jpeg'
        ]);

    }
}
