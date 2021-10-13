<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            ['title'=>'Оплата банковской картой', 'description'=>'Оплата заказа картами Visa и MasterCard', 'images'=>['visa-icon', 'mc-icon']],
            ['title'=>'Яндекс.Деньги', 'description'=>'Оплата заказа через сервис', 'images'=>['ya-icon']],
            ['title'=>'Наличными', 'description'=>'Оплата заказа наличными курьеру при доставке или продавцу в магазине при самовывозе', 'images'=>['cash-icon']],
            ['title'=>'Кредит онлайн', 'description'=>'Оплата заказа через Банки', 'images'=>['visa-icon', 'mc-icon']],
            ['title'=>'Не выбрано', 'description'=>'', 'images'=>[]],
        ];

        foreach ($payments as $payment){
            PaymentMethod::create([
                'title'=>$payment['title'],
                'description'=>$payment['description'],
                'images'=>json_encode($payment['images'])
            ]);
        }
    }
}
