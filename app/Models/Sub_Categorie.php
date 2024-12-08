<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sub_Categorie extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    protected $fillable = [
        'category_id',
        'name',
        'description'
    ];
}
