<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deliveries = [
            ['title'=>'Доставка курьером', 'description'=>'В удобный для вас день и интервал времени', 'price'=>'Договорная цена'],
            ['title'=>'Самовывоз', 'description'=>'Без лишних рук и когда удобно 1 пункт', 'price'=>'Договорная цена'],
            ['title'=>'Доставка по РФ', 'description'=>'В удобный для вас день и интервал времени', 'price'=>'Договорная цена'],
            ['title'=>'Не выбрано', 'description'=>'', 'price'=>''],
        ];

        foreach ($deliveries as $delivery){
            DeliveryMethod::create([
                'title'=>$delivery['title'],
                'description'=>$delivery['description'],
                'price'=>$delivery['price']
            ]);
        }
    }
}
