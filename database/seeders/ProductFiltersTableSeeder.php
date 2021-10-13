<?php

namespace Database\Seeders;

use App\Models\ProductFilter;
use Illuminate\Database\Seeder;

class ProductFiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Тип товара
        //type_id 1 'По бренду'
        //type_id 2 'По диагонали'
        //type_id 3 'По типу экрана'
        //type_id 4 'По назначению'

        //Товары
        //product_id 1 = Телевизор LG 32LK6200

        $productFilters = [
            //Телевизоры бренд
            ['subcategory_id'=>2,'filter'=>'Sony'],
            ['subcategory_id'=>2,'filter'=>'Samsung'],
            ['subcategory_id'=>2,'filter'=>'LG'],
            ['subcategory_id'=>2,'filter'=>'Philips'],
            ['subcategory_id'=>2,'filter'=>'ProCaster'],
            ['subcategory_id'=>2,'filter'=>'Panasonic'],
            //Телевизоры по диагонали
            ['subcategory_id'=>3,'filter'=>'до 20"'],
            ['subcategory_id'=>3,'filter'=>'20"- 30"'],
            ['subcategory_id'=>3,'filter'=>'30"- 40"'],
            ['subcategory_id'=>3,'filter'=>'40"- 50"'],
            ['subcategory_id'=>3,'filter'=>'50"- 60"'],
            ['subcategory_id'=>3,'filter'=>'более 60"'],
            //Телевизоры по типу экрана
            ['subcategory_id'=>4,'filter'=>'ЖК(LED)'],
            ['subcategory_id'=>4,'filter'=>'ЖК(LCD)'],
            ['subcategory_id'=>4,'filter'=>'OLED'],
            ['subcategory_id'=>4,'filter'=>'QLED'],
            ['subcategory_id'=>4,'filter'=>'Nano Cell'],
            //Телевизоры по назначению
            ['subcategory_id'=>5,'filter'=>'Для бизнеса'],
            ['subcategory_id'=>5,'filter'=>'Для киноманов'],
            ['subcategory_id'=>5,'filter'=>'Для гостиной'],
            ['subcategory_id'=>5,'filter'=>'Для кухни'],
            ['subcategory_id'=>5,'filter'=>'Для спальни'],
            ['subcategory_id'=>5,'filter'=>'Для дачи'],
            //Проекторы бренд
            ['subcategory_id'=>10,'filter'=>'Asus'],
            ['subcategory_id'=>10,'filter'=>'Benq'],
            ['subcategory_id'=>10,'filter'=>'Epson'],
            ['subcategory_id'=>10,'filter'=>'Optoma'],
            //

            ['subcategory_id'=>29,'filter'=>'iPad Air (2019)'],
            ['subcategory_id'=>29,'filter'=>'iPad mini (2019)'],
            ['subcategory_id'=>29,'filter'=>'Apple iPad (2019)'],
            ['subcategory_id'=>29,'filter'=>'iPad Pro 11 (2018)'],

            ['subcategory_id'=>29,'filter'=>'iPad Air (2019)'],
            ['subcategory_id'=>30,'filter'=>'iPhone Pro Max'],
            ['subcategory_id'=>30,'filter'=>'iPhone 11'],
            ['subcategory_id'=>30,'filter'=>'iPhone 11 Pro'],

            ['subcategory_id'=>38,'filter'=>'Стационарные миксеры'],
            ['subcategory_id'=>38,'filter'=>'Планетарные миксеры'],
            ['subcategory_id'=>38,'filter'=>'Кухонные комбайны'],
            ['subcategory_id'=>38,'filter'=>'Ручные миксеры'],

            ['subcategory_id'=>39,'filter'=>'Капельные кофеварки'],
            ['subcategory_id'=>39,'filter'=>'Кофеварки'],
            ['subcategory_id'=>40,'filter'=>'Стационарные блендеры'],
            ['subcategory_id'=>40,'filter'=>'Погружные блендеры'],
            ['subcategory_id'=>41,'filter'=>'Чайники'],
            ['subcategory_id'=>41,'filter'=>'Противень для гриля'],

        ];
        foreach($productFilters as $productFilter)
            ProductFilter::create([
                'subcategory_id'=>$productFilter['subcategory_id'],
                'filter'=>$productFilter['filter']
            ]);
    }
}
