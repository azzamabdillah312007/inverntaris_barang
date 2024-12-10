<?php

namespace App\Models;

use App\Models\Sub_Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description'
    ];

    public function subCategories(){
        return $this->hasMany(Sub_Categorie::class);
    }
    
}
