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
<<<<<<< HEAD
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
=======
    {
        // PLAYSTATION GAMES
        Game::create([
            'slug' => Str::slug('Grand Theft Auto 5', '-'),
            'platform' => 'playstation',
            'name' => 'Grand Theft Auto 5', 
            'price' => '£34.99',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.', 
            'image' => '/storage/images/playstation/grand_theft_auto5.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Battleborn', '-'),
            'platform' => 'playstation',
            'name' => 'Battleborn', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/battleborn.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Call of Duty Advanced Warfare', '-'),
            'platform' => 'playstation',
            'name' => 'Call of Duty Advanced Warfare', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/call_of_duty_advanced_warfare.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Dishonored 2', '-'),
            'platform' => 'playstation',
            'name' => 'Dishonored 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dishonored2.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Alien Isolation', '-'),
            'platform' => 'playstation',
            'name' => 'Alien Isolation', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/alien_isolation.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Dying Light', '-'),
            'platform' => 'playstation',
            'name' => 'Dying Light', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dying_light.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Steep', '-'),
            'platform' => 'playstation',
            'name' => 'Steep', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/steep.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Helldivers', '-'),
            'platform' => 'playstation',
            'name' => 'Helldivers', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/helldivers.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Knack', '-'),
            'platform' => 'playstation',
            'name' => 'Knack', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/knack.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Dynasty Warriors 8', '-'),
            'platform' => 'playstation',
            'name' => 'Dynasty Warriors 8', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/dynasty_warriors8_empires.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Payday 2', '-'),
            'platform' => 'playstation',
            'name' => 'Payday 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/payday2.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Ravens Cry', '-'),
            'platform' => 'playstation',
            'name' => 'Ravens Cry', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/playstation/ravens_cry.jpeg'
>>>>>>> 1b6610b198eb303d8d38d9c5b6ce37af0fd7cae3
        ]);

        // XBOX GAMES
        Game::create([
<<<<<<< HEAD
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
=======
            'slug' => Str::slug('Mortal Kombat X', '-'),
            'platform' => 'xbox',
            'name' => 'Mortal Kombat X', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/mortal_kombatx.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Titanfall 2', '-'),
            'platform' => 'xbox',
            'name' => 'Titanfall 2', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/titanfall2.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Fallout 4', '-'),
            'platform' => 'xbox',
            'name' => 'Fallout 4', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fallout4.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Deadrising 3', '-'),
            'platform' => 'xbox',
            'name' => 'Deadrising 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/deadrising3.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Warframe', '-'),
            'platform' => 'xbox',
            'name' => 'Warframe', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/warframe.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Zombi', '-'),
            'platform' => 'xbox',
            'name' => 'Zombi', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/zombi.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Fortnite', '-'),
            'platform' => 'xbox',
            'name' => 'Fortnite', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/fortnite.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Grow Up', '-'),
            'platform' => 'xbox',
            'name' => 'Grow Up', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/grow_up.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Hue', '-'),
            'platform' => 'xbox',
            'name' => 'Hue', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/hue.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Necropolis', '-'),
            'platform' => 'xbox',
            'name' => 'Necropolis', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/necropolis.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Rayman Legends', '-'),
            'platform' => 'xbox',
            'name' => 'Rayman Legends', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/rayman_legends.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Roblox', '-'),
            'platform' => 'xbox',
            'name' => 'Roblox', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/xbox/roblox.jpeg'
        ]);

        // NINTENDO
        Game::create([
            'slug' => Str::slug('Lumo', '-'),
            'platform' => 'nintendo',
            'name' => 'Lumo', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/lumo.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Bendy and the Ink Machine', '-'),
            'platform' => 'nintendo',
            'name' => 'Bendy and the Ink Machine', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/bendy_and_the_ink_machine.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Mario Kart Deluxe 8', '-'),
            'platform' => 'nintendo',
            'name' => 'Mario Kart Deluxe 8', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/mario_kart_deluxe8.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Party Planet', '-'),
            'platform' => 'nintendo',
            'name' => 'Party Planet', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/party_planet.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Arms', '-'),
            'platform' => 'nintendo',
            'name' => 'Arms', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/arms.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Celeste', '-'),
            'platform' => 'nintendo',
            'name' => 'Celeste', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/celeste.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Urban Trial Playground', '-'),
            'platform' => 'nintendo',
            'name' => 'Urban Trial Playground', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/urban_trial_playground.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Wild Guns Reloaded', '-'),
            'platform' => 'nintendo',
            'name' => 'Wild Guns Reloaded', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/wild_guns_reloaded.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Penny Punching Princess', '-'),
            'platform' => 'nintendo',
            'name' => 'Penny Punching Princess', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/penny_punching_princess.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Poi', '-'),
            'platform' => 'nintendo',
            'name' => 'Poi', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/poi.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Rico', '-'),
            'platform' => 'nintendo',
            'name' => 'Rico', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/rico.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Stardew Valley', '-'),
            'platform' => 'nintendo',
            'name' => 'Stardew Valley', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/stardew_valley.jpeg'
>>>>>>> 1b6610b198eb303d8d38d9c5b6ce37af0fd7cae3
        ]);

        // PC GAMES
        Game::create([
<<<<<<< HEAD
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
=======
            'slug' => Str::slug('Dead Space 3', '-'),
            'platform' => 'pc',
            'name' => 'Dead Space 3', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/dead_space3.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Flatout', '-'),
            'platform' => 'pc',
            'name' => 'Flatout', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/flatout.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Assassins Creed Brotherhood', '-'),
            'platform' => 'pc',
            'name' => 'Assassins Creed Brotherhood', 
            'price' => '£9.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/assassins_creed_brotherhood.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Star Treck', '-'),
            'platform' => 'pc',
            'name' => 'Star Treck', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/star_treck.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Torchlight 2', '-'),
            'platform' => 'pc',
            'name' => 'Torchlight 2', 
            'price' => '£19.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/torchlight2.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Breath of Fire 4', '-'),
            'platform' => 'pc',
            'name' => 'Breath of Fire 4', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/breath_of_fire4.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Portal 2', '-'),
            'platform' => 'pc',
            'name' => 'Portal 2', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/portal2.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Bullestorm', '-'),
            'platform' => 'pc',
            'name' => 'Bulletstorm', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/bulletstorm.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Cold Fear', '-'),
            'platform' => 'pc',
            'name' => 'Cold Fear', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/cold_fear.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Prince of Persia', '-'),
            'platform' => 'pc',
            'name' => 'Prince of Persia', 
            'price' => '£14.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/prince_of_persia.jpeg'
        ]);


        Game::create([
            'slug' => Str::slug('Resident Evil 6', '-'),
            'platform' => 'pc',
            'name' => 'Resident Evil 6', 
            'price' => '£29.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/resident_evil6.jpeg'
        ]);


        Game::create([
            'slug' => Str::slug('Rocket League', '-'),
            'platform' => 'pc',
            'name' => 'Rocket League', 
            'price' => '£24.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/pc/rocket_league.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Pokemon Sword', '-'),
            'platform' => 'nintendo',
            'name' => 'Pokemon Sword', 
            'price' => '£49.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/pokemon_sword.jpeg'
        ]);

        Game::create([
            'slug' => Str::slug('Pokemon Shield', '-'),
            'platform' => 'nintendo',
            'name' => 'Pokemon Shield', 
            'price' => '£49.99', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.',
            'image' => '/storage/images/nintendo/pokemon_shield.jpeg'
>>>>>>> 1b6610b198eb303d8d38d9c5b6ce37af0fd7cae3
        ]);
    }
}
