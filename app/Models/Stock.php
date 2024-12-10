<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'item_id',
        'quantity',
        'location_id'
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
