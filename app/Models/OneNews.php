<?php


namespace App\Models;


class OneNews
{
    public function oneNewsByID(int $id, array $allNews): ?News
    {

        foreach ($allNews as $oneNews) {
            if ($oneNews->id == $id) {
                return $oneNews;
            }
        }
        return null;
    }
}
