<?php


namespace App\Models;


use Illuminate\View\View;

class News
{
    private Categories $categories;

    private array $news = [
        1 => [
            'id' => 1,
            'title' => "спортивный заголовок",
            'text' => "новость о спорте",
            'isPrivate' => false,
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => "политический заголовок заголовок",
            'text' => "новость о политике",
            'isPrivate' => false,
            'category_id' => 2
        ],
        '3' => [
            'id' => 3,
            'title' => "экономический заголовок",
            'text' => "новость об экономике",
            'isPrivate' => true,
            'category_id' => 3
        ],
        '4' => [
            'id' => 4,
            'title' => "туристический заголовок",
            'text' => "новость о туризме",
            'isPrivate' => true,
            'category_id' => 4
        ],
        '5' => [
            'id' => 5,
            'title' => "научный заголовок",
            'text' => "новость о науке",
            'isPrivate' => true,
            'category_id' => 5
        ]
    ];


    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    public function getAllNews(): ?array
    {
        return $this->news;
    }

    public function getOneNewsByID(int $id): ?array
    {
        if (array_key_exists($id, $this->getAllNews())) {
            return $this->getAllNews()[$id];
        }
        return null;
    }
}
