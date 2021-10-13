<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            ['title'=>'Телевизоры', 'icon'=>'#icon-tv'],
            ['title'=>'Аксессуары для телевизоров', 'icon'=>'#icon-tv'],
            ['title'=>'Проекторы', 'icon'=>'#icon-projector'],
            ['title'=>'Умные часы и браслеты', 'icon'=>'#icon-watch'],
            ['title'=>'Акустические системы', 'icon'=>'#icon-sound'],
            ['title'=>'Наушники и гарнитуры', 'icon'=>'#icon-headphones'],
            ['title'=>'Комплектующие для ПК', 'icon'=>'#icon-pc'],
            ['title'=>'Игровые приставки и аксессуары', 'icon'=>'#icon-x-box'],
            ['title'=>'Apple', 'icon'=>'#icon-apple'],
            ['title'=>'Смартфоны и планшеты', 'icon'=>'#icon-ipad'],
            ['title'=>'Чехлы', 'icon'=>'#icon-circles'],
            ['title'=>'Графические планшеты', 'icon'=>'#icon-ipad'],
            ['title'=>'Техника для кухни', 'icon'=>'#icon-fridge'],
            ['title'=>'Пылесосы', 'icon'=>'#icon-circles'],
            ['title'=>'Климатическая техника', 'icon'=>'#icon-circles'],
            ['title'=>'Аксессуары', 'icon'=>'#icon-circles'],
            ['title'=>'Гаджеты', 'icon'=>'#icon-circles'],
            ['title'=>'Музыкальные инструменты', 'icon'=>'#icon-circles'],
            ['title'=>'Товары для детей', 'icon'=>'#icon-circles'],
            ['title'=>'Товары для путешествий и отдыха', 'icon'=>'#icon-circles'],
            ['title'=>'Уцененные товары', 'icon'=>'#icon-brand']
        ];
        foreach($categories as $category)
            Category::create([
                'title'=>$category['title'],
                'icon'=>$category['icon']
            ]);
    }
}
