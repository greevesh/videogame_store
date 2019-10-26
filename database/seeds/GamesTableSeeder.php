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
            'slug' => 'call-of-duty-advanced-warfare',
            'platform' => 'playstation',
            'name' => 'Call of Duty Advanced Warfare', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/callofduty.jpeg'
        ]);

        Game::create([
            'slug' => 'dishonored-2',
            'platform' => 'playstation',
            'name' => 'Dishonored 2', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/dishonored2.jpeg'
        ]);

        Game::create([
            'slug' => 'dying-light',
            'platform' => 'playstation',
            'name' => 'Dying Light', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/dyinglight.jpeg'
        ]);

        Game::create([
            'slug' => 'dynasty-warriors-8',
            'platform' => 'playstation',
            'name' => 'Dynasty Warriors 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/dynastywarriors8.jpeg'
        ]);

        Game::create([
            'slug' => 'grand-theft-auto-5',
            'platform' => 'playstation',
            'name' => 'Grand Theft Auto 5', 
            'price' => '£34.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/gta5.jpeg'
        ]);

        Game::create([
            'slug' => 'mxgp-2',
            'platform' => 'playstation',
            'name' => 'MXGP 2', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/mxgp2.jpeg'
        ]);

        Game::create([
            'slug' => 'prey',
            'platform' => 'playstation',
            'name' => 'Prey', 
            'price' => '£24.99',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.', 
            'image' => '/storage/images/prey.jpeg'
        ]);

        Game::create([
            'slug' => 'watchdogs-2',
            'platform' => 'playstation',
            'name' => 'Watchdogs 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/watchdogs2.jpeg'
        ]);

        // XBOX GAMES
        Game::create([
            'slug' => 'deadrising-3',
            'platform' => 'xbox',
            'name' => 'Deadrising 3', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/deadrising3.jpeg'
        ]);

        Game::create([
            'slug' => 'fallout-4',
            'platform' => 'xbox',
            'name' => 'Fallout 4', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/fallout4.jpeg'
        ]);

        Game::create([
            'slug' => 'fortnite',
            'platform' => 'xbox',
            'name' => 'Fortnite', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/fortnite.jpeg'
        ]);

        Game::create([
            'slug' => 'madmax',
            'platform' => 'xbox',
            'name' => 'Madmax', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/madmax.jpeg'
        ]);

        Game::create([
            'slug' => 'minecraft-xbox-one-edition',
            'platform' => 'xbox',
            'name' => 'Minecraft', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/minecraft.jpeg'
        ]);

        Game::create([
            'slug' => 'mortal-kombat-x',
            'platform' => 'xbox',
            'name' => 'Mortal Kombat X', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/mortalkombatx.jpeg'
        ]);

        Game::create([
            'slug' => 'titanfall-2',
            'platform' => 'xbox',
            'name' => 'Titanfall 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/titanfall2.jpeg'
        ]);

        Game::create([
            'slug' => 'unravel',
            'platform' => 'xbox',
            'name' => 'Unravel', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/unravel.jpeg'
        ]);

        // NINTENDO GAMES
        Game::create([
            'slug' => 'cave-story',
            'platform' => 'nintendo switch',
            'name' => 'Cave Story', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/cavestory.jpeg'
        ]);

        Game::create([
            'slug' => 'crayola-scoot',
            'platform' => 'nintendo switch',
            'name' => 'Crayola Scoot', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/crayoloascoot.jpeg'
        ]);

        Game::create([
            'slug' => 'lumo',
            'platform' => 'nintendo switch',
            'name' => 'Lumo', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/lumo.jpeg'
        ]);

        Game::create([
            'slug' => 'party-planet',
            'platform' => 'nintendo switch',
            'name' => 'Party Planet', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/partyplanet.jpeg'
        ]);

        Game::create([
            'slug' => 'stardew-valley',
            'platform' => 'nintendo switch',
            'name' => 'Stardew Valley', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/stardewvalley.jpeg'
        ]);

        Game::create([
            'slug' => 'super-bomberman',
            'platform' => 'nintendo switch',
            'name' => 'Super Bomberman', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/superbomberman.jpeg'
        ]);

        Game::create([
            'slug' => 'wild-guns-reloaded',
            'platform' => 'nintendo switch',
            'name' => 'Wild Guns Reloaded', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/wildgunsreloaded.jpeg'
        ]);

        Game::create([
            'slug' => 'mario-kart-deluxe-8',
            'platform' => 'nintendo switch',
            'name' => 'Mario Kart Deluxe 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/mariokartdeluxe8.jpeg'
        ]);

        // PC GAMES
        Game::create([
            'slug' => 'dark-souls',
            'platform' => 'pc',
            'name' => 'Dark Souls', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/darksouls.jpeg'
        ]);

        Game::create([
            'slug' => 'farming-simulator-17',
            'platform' => 'pc',
            'name' => 'Farming Simulator 17', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/farmingsimulator17.jpeg'
        ]);

        Game::create([
            'slug' => 'greedfall',
            'platform' => 'pc',
            'name' => 'Greedfall', 
            'price' => '£49.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/greedfall.jpeg'
        ]);

        Game::create([
            'slug' => 'injustice-2',
            'platform' => 'pc',
            'name' => 'Injustice 2', 
            'price' => '£34.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/injustice2.jpeg'
        ]);

        Game::create([
            'slug' => 'just-cause-4',
            'platform' => 'pc',
            'name' => 'Just Cause 4', 
            'price' => '£39.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/justcause4.jpeg'
        ]);

        Game::create([
            'slug' => 'project-cars',
            'platform' => 'pc',
            'name' => 'Project Cars', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/projectcars.jpeg'
        ]);

        Game::create([
            'slug' => 'sekiro',
            'platform' => 'pc',
            'name' => 'Sekiro', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/sekiro.jpeg'
        ]);

        Game::create([
            'slug' => 'tropico-6',
            'platform' => 'pc',
            'name' => 'Tropico 6', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/tropico6.jpeg'
        ]);
    }
}
