<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoriesTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(ProductStatusessTableSeeder::class);
        $this->call(ProductFiltersTableSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(PaymentSeeder::class);
        $counter = 1;
        while($counter<20) {
            $this->call(ProductsTableSeeder::class);
            $counter++;
        }
        $this->call(ProductsFiltersTableSeeder::class);

        Model::reguard();
    }
}
