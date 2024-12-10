<?php

namespace Database\Seeders;

use App\Models\Sub_Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sub_Categorie::insert([
            'category_id' => '1',
            'name' => 'baju',
            'description' => 'Barang awet tahan lama'
        ]);
    }
}
