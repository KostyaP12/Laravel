<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

        private function getData(): array
    {
        return [
            [
                'title' => "Спорт",
                'slug' => 'sport'],
            [
                'title' => "Политика",
                'slug' => 'politics'],
            [
                'title' => "Экономика",
                'slug' => 'economy'],
            [
                'title' => "Туризм",
                'slug' => 'tourism'],
            [
                'title' => "Наука",
                'slug' => 'science']
        ];
    }
}

