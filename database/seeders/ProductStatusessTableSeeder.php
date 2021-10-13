<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Seeder;

class ProductStatusessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productStatuses = [
            ['title'=>'В наличии'],
            ['title'=>'Нет в наличии']
        ];
        foreach($productStatuses as $productStatus)
            ProductStatus::create([
                'title'=>$productStatus['title']
            ]);
    }
}
