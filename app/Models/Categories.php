<?php


namespace App\Models;



use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Categories
{
    /*private array $categories = [
        1 => [
            'id' => 1,
            'title' => "Спорт",
            'slug' => 'sport'],
        2 => [
            'id' => 2,
            'title' => "Политика",
            'slug' => 'politics'],
        3 => [
            'id' => 3,
            'title' => "Экономика",
            'slug' => 'economy'],
        4 => [
            'id' => 4,
            'title' => "Туризм",
            'slug' => 'tourism'],
        5 => [
            'id' => 5,
            'title' => "Наука",
            'slug' => 'science']];*/


    public function showCategories(string $categoriesName): ?array
    {
        /*$categoriesNews = [];
        $id = 0;
        foreach ($this->categories as $category_id) {
            if ($categoriesName == $category_id['slug']) {
                $id = $category_id['id'];
            }
        }
        foreach ($allNews as $oneNews) {
            if ($oneNews['category_id'] == $id) {
                $categoriesNews[] = $oneNews;
            }
        }*/

        return DB::select(
            'SELECT * FROM News INNER JOIN categories ON news.category_id=categories.id WHERE categories.slug=:categoriesName',
            ['categoriesName' => $categoriesName]);
    }

    public function getCategories(): ?Collection
    {
        //return $this->categories;
        return DB::table("categories")->get();
    }


}
