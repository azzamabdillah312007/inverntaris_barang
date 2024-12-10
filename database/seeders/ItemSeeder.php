<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::insert([
            [
                'sub_category_id' => '1',
                'name' => 'Baju Kaos',
                'description' => 'Barang awet tahan lama',
                'image' => 'https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660',
                'price' => '100000',
            ],
            [
                'sub_category_id' => '1',
                'name' => 'Celana Pendek',
                'description' => 'Barang awet tahan lama',
                'image' => 'https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660',
                'price' => '100000',
            ],
            [
                'sub_category_id' => '1',
                'name' => 'Sepatu nike',
                'description' => 'Barang awet tahan lama',
                'image' => 'https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660',
                'price' => '100000',
            ],
            [
                'sub_category_id' => '1',
                'name' => 'Kaos kaki Sekolah',
                'description' => 'Barang awet tahan lama',
                'image' => 'https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660',
                'price' => '100000',
            ],
            [
                'sub_category_id' => '1',
                'name' => 'Jam tangan Rolex',
                'description' => 'Barang awet tahan lama',
                'image' => 'https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660',
                'price' => '100000',
            ],
        ]);
    }
}
