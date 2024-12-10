<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Sub_Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'sub_category_id',
        'name',
        'description',
        'image',
        'price'
    ];

    public function stocks(){
        return $this->hasMany(Stock::class);
    }

    public function subCategorie(){
        return $this->belongsTo(Sub_Categorie::class);
    }
}
