<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'comic', 'novel', 'fantasy', 'fiction', 'mystery', 'horror', 'romance', 'western'
        ];

        foreach ($data as $value) {
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
