<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subcategories = [
            //Телевизоры
            ['title'=>'Все телевизоры', 'category_id'=>1, 'icon'=>'#icon-tv'],
            ['title'=>'По бренду', 'category_id'=>1, 'icon'=>'#icon-brand'],
            ['title'=>'По диагонали', 'category_id'=>1, 'icon'=>'#icon-size'],
            ['title'=>'По типу экрана', 'category_id'=>1, 'icon'=>'#icon-tv-small'],
            ['title'=>'По назначению', 'category_id'=>1, 'icon'=>'#icon-hometv'],
            //Аксессуары для телевизоров
            ['title'=>'Все аксессуары для телевизоров', 'category_id'=>2, 'icon'=>'#icon-tv'],
            ['title'=>'Кронштейны', 'category_id'=>2, 'icon'=>'#icon-sound'],
            ['title'=>'Саундбары', 'category_id'=>2, 'icon'=>'#icon-sound'],
            ['title'=>'Прочее', 'category_id'=>2, 'icon'=>'#icon-circles'],
            //Проекторы
            ['title'=>'Все проекторы', 'category_id'=>3, 'icon'=>'#icon-projector'],
            //Умные часы и браслеты
            ['title'=>'Все умные часы и браслеты', 'category_id'=>4,  'icon'=>'#icon-watch'],
            //Акустические системы
            ['title'=>'Все акустические системы', 'category_id'=>5, 'icon'=>'#icon-sound'],
            ['title'=>'Акустика', 'category_id'=>5, 'icon'=>'#icon-sound'],
            ['title'=>'Портативная акустика', 'category_id'=>5, 'icon'=>'#icon-sound'],
            ['title'=>'Сабвуферы', 'category_id'=>5, 'icon'=>'#icon-sound'],
            //Наушники и гарнитуры
            ['title'=>'Все наушники и гарнитуры', 'category_id'=>6, 'icon'=>'#icon-headphones'],
            //Комплектующие для ПК
            ['title'=>'Все комплектующие для ПК', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Блоки питания', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Звуковые карты', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Видеокарты Nvidia', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Материнские платы', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Мониторы', 'category_id'=>7,  'icon'=>'#icon-pc'],
            ['title'=>'Прочее', 'category_id'=>7,  'icon'=>'#icon-pc'],
            //Игровые приставки и аксессуары
            ['title'=>'Все игровые приставки и аксессуары', 'category_id'=>8, 'icon'=>'#icon-x-box'],
            ['title'=>'Игровые приставки', 'category_id'=>8, 'icon'=>'#icon-x-box'],
            ['title'=>'Очки виртуальной реальности', 'category_id'=>8, 'icon'=>'#icon-x-box'],
            ['title'=>'Игры и аксессуары', 'category_id'=>8, 'icon'=>'#icon-x-box'],
            //Apple
            ['title'=>'Все Apple', 'category_id'=>9, 'icon'=>'#icon-apple'],
            ['title'=>'iPad', 'category_id'=>9, 'icon'=>'#icon-ipad'],
            ['title'=>'iPhone', 'category_id'=>9, 'icon'=>'#icon-iphone'],
            ['title'=>'iPod', 'category_id'=>9, 'icon'=>'#icon-apple'],
            ['title'=>'MacBook', 'category_id'=>9, 'icon'=>'#icon-apple'],
            ['title'=>'Watch', 'category_id'=>9, 'icon'=>'#icon-apple'],
            //Смартфоны и планшеты
            ['title'=>'Все смартфоны и планшеты', 'category_id'=>10, 'icon'=>'#icon-ipad'],
            //Чехлы
            ['title'=>'Все чехлы', 'category_id'=>11, 'icon'=>'#icon-circles'],
            //Графические планшеты
            ['title'=>'Все графические планшеты', 'category_id'=>12, 'icon'=>'#icon-ipad'],
            //Техника для кухни
            ['title'=>'Вся техника для кухни', 'category_id'=>13, 'icon'=>'#icon-fridge'],
            ['title'=>'Миксеры и кухонные комбайны', 'category_id'=>13, 'icon'=>'#icon-mixer'],
            ['title'=>'Кофеварки и кофемашины', 'category_id'=>13, 'icon'=>'#icon-coffeem'],
            ['title'=>'Блендеры', 'category_id'=>13, 'icon'=>'#icon-blender'],
            ['title'=>'Чайники и тостеры', 'category_id'=>13, 'icon'=>'#icon-teapot'],
            ['title'=>'Прочее', 'category_id'=>13, 'icon'=>'#icon-fridge'],
            //Пылесосы
            ['title'=>'Все пылесосы', 'category_id'=>14, 'icon'=>''],
            ['title'=>'Беспроводные пылесосы', 'category_id'=>14, 'icon'=>''],
            ['title'=>'Проводные пылесосы', 'category_id'=>14, 'icon'=>''],
            ['title'=>'Роботы-пылесосы', 'category_id'=>14, 'icon'=>''],
            //Климатическая техника
            ['title'=>'Вся климатическая техника', 'category_id'=>15, 'icon'=>'#icon-circles'],
            ['title'=>'Вентиляторы', 'category_id'=>15, 'icon'=>'#icon-circles'],
            ['title'=>'Прочее', 'category_id'=>15, 'icon'=>'#icon-circles'],
            //Аксессуары
            ['title'=>'Все аксессуары', 'category_id'=>16, 'icon'=>'#icon-circles'],
            ['title'=>'Док-станции', 'category_id'=>16, 'icon'=>'#icon-circles'],
            ['title'=>'Беспроводные ЗУ', 'category_id'=>16, 'icon'=>'#icon-circles'],
            ['title'=>'Переходники, кабели', 'category_id'=>16, 'icon'=>'#icon-circles'],
            ['title'=>'Стационарные медиаплееры', 'category_id'=>16, 'icon'=>'#icon-circles'],
            //Гаджеты
            ['title'=>'Все гаджеты', 'category_id'=>17, 'icon'=>'#icon-circles'],
            //Музыкальные инструменты
            ['title'=>'Все музыкальные инструменты', 'category_id'=>18, 'icon'=>'#icon-circles'],
            ['title'=>'Гитары', 'category_id'=>18, 'icon'=>'#icon-circles'],
            ['title'=>'Синтезаторы', 'category_id'=>18, 'icon'=>'#icon-circles'],
            ['title'=>'DJ-оборудование', 'category_id'=>18, 'icon'=>'#icon-circles'],
            ['title'=>'Микрофоны и радиосистемы', 'category_id'=>18, 'icon'=>'#icon-circles'],
            ['title'=>'Прочее', 'category_id'=>18, 'icon'=>'#icon-circles'],
            //Товары для детей
            ['title'=>'Все товары для детей', 'category_id'=>19, 'icon'=>'#icon-circles'],
            ['title'=>'Детские коляски и автокресла', 'category_id'=>19, 'icon'=>'#icon-circles'],
            ['title'=>'LEGO', 'category_id'=>19, 'icon'=>'#icon-circles'],
            ['title'=>'Прочее', 'category_id'=>19, 'icon'=>'#icon-circles'],
            //Товары для путешествий и отдыха
            ['title'=>'Все товары для путешествий и отдыха', 'category_id'=>20, 'icon'=>'#icon-circles'],
            ['title'=>'Грили, коптильни', 'category_id'=>20, 'icon'=>'#icon-circles'],
            ['title'=>'Товары для путешествий', 'category_id'=>20, 'icon'=>'#icon-circles'],
            //Уцененные товары
            ['title'=>'Все уцененные товары', 'category_id'=>21, 'icon'=>'#icon-circles'],
        ];
        foreach($subcategories as $subcategory)
            Subcategory::create([
                'title'=>$subcategory['title'],
                'category_id'=>$subcategory['category_id'],
                'icon'=>$subcategory['icon']
            ]);
    }
}
