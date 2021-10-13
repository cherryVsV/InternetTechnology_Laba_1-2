<?php

namespace Database\Seeders;

use App\Models\ProductsFilters;
use Illuminate\Database\Seeder;

class ProductsFiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counter = 1;
        while($counter<106) {
            $filter = rand(1, 45);
            $product = rand(1, 50);
            ProductsFilters::create([
               'product_id' => $product,
                'filter_id'=>$filter
            ]);
            $counter++;
        }
    }
}
