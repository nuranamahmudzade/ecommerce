<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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
                'name' => 'BENETTON Bisiklet Yaka Baskılı Uzun Kollu Erkek Çocuk Tişört',
                'price' => '259.99',
                'type' => 'physical'
            ],
            [
                'name' => 'XSIDE Oversize Bisiklet Yaka Kısa Kollu Erkek Tişört',
                'price' => '139.99',
                'type' => 'physical'
            ]
        ];

        foreach ($data as $key => $value){
            Products::create([
                'name' => $value['name'],
                'price' => $value['price'],
                'type' => $value['type']
            ]);
        }
    }
}
