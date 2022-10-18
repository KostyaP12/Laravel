<?php


namespace App\Models;


class Categories
{
    private array $categories_id = [
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
            'slug' => 'science']];


    public function showCategories(array $allNews, string $categoriesName): array
    {
        $categoriesNews = [];
        $id = 0;
        foreach ($this->categories_id as $category_id) {
            if ($categoriesName == $category_id['slug']) {
                $id = $category_id['id'];
            }
        }
        foreach ($allNews as $oneNews) {
            if ($oneNews['category_id'] == $id) {
                $categoriesNews[] = $oneNews;
            }
        }

        return $categoriesNews;
    }

    /**
     * @return array|array[]
     */
    public function getCategoriesId(): array
    {
        return $this->categories_id;
    }

}
