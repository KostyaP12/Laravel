<?php


namespace App\Models;


class Categories
{
    private array $sport_id = [1, 'sport'];
    private array $politics_id = [2, 'politics'];
    private array $economy_id = [3, 'economy'];
    private array $tourism_id = [4, 'tourism'];
    private array $science_id = [5, 'science'];


    public function categories(string $categoriesName)
    {
        switch ($categoriesName) {
            case $this->sport_id[1]:
                return $this->sport_id[0];
            case $this->politics_id[1]:
                return $this->politics_id[0];
            case $this->economy_id[1]:
                return $this->economy_id[0];
            case $this->tourism_id[1]:
                return $this->tourism_id[0];
            case $this->science_id[1]:
                return $this->science_id[0];
        }
    }

    public function showCategories(array $allNews, string $categoriesName): array
    {

        $categoriesNews = [];
        foreach ($allNews as $oneNews) {
            if ($oneNews->categories == $this->categories($categoriesName)) {
                $categoriesNews[] = $oneNews;
            }
        }
        return $categoriesNews;
    }
}
