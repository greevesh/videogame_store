<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model 
{
    protected $primaryKey = 'game_id'; 

    protected $fillable = ['game_id,', 'name', 'price'];

    public function getRouteKeyName() {
        return 'slug'; 
    }
}
