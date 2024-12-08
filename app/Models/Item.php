<?php

namespace App\Models;

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
}
