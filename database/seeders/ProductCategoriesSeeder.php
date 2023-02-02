<?php

namespace Database\Seeders;

use App\Models\ProductCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Beyaz'
            ],
            [
                'name' => 'Yeni Siyah'
            ],
            [
                'name' => 'Gri Melanj'
            ],
        ];

        foreach ($data as $key => $value){
            ProductCategories::create([
                'name' => $value['name']
            ]);
        }
    }
}
