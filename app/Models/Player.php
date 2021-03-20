<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getProfitClassAttribute()
    {
        $profit = $this->getProfitAttribute();

        if ($profit > 0) {
            return 'green';
        }

        if ($profit < 0) {
            return 'red';
        }

        return 'yellow';
    }

    public function getProfitAttribute()
    {
        return $this->attributes['current_price'] - $this->attributes['purchase_price'];
    }
}
