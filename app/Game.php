<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Treestoneit\ShoppingCart\Buyable;
use Treestoneit\ShoppingCart\BuyableTrait;

class Game extends Model implements Buyable
{
    protected $primaryKey = 'game_id'; 
    
    // enables shopping cart functionality
    use BuyableTrait; 

    protected $fillable = ['name'];
}
