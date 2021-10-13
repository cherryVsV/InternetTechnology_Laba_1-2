<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['title'=>'В обработке'],
            ['title'=>'Принят'],
            ['title'=>'Ожидается оплата'],
            ['title'=>'Выполняется доставка'],
            ['title'=>'Доставлен'],
            ['title'=>'Ожидается самовывоз'],
            ['title'=>'Завершен'],
        ];
        foreach ($statuses as $status){
            OrderStatus::create([
                'title'=>$status['title']
            ]);
        }
    }
}
