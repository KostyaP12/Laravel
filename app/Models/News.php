<?php


namespace App\Models;


use Illuminate\Support\Facades\Storage;


class News
{

    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    public function getAllNews():?array
    {
        return json_decode(Storage::disk('local')->get('news.json'), true);
    }

    public function getOneNewsByID(int $id): ?array
    {
        if (array_key_exists($id, $this->getAllNews())) {
            return $this->getAllNews()[$id];
        }
        return null;
    }
}
