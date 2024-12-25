<?php

namespace App\Models;

use App\Models\Location;
use App\Models\Sub_Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'sub_category_id',
        'location_id',
        'name',
        'description',
        'image',
        'price',
        'stock'
    ];


    public function subCategorie()
    {
        return $this->belongsTo(Sub_Categorie::class,  'sub_category_id', 'id');
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
}
