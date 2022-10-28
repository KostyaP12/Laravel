<?php


namespace App\Models;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;


class News
{

    public function getAllNews(): ?Collection
    {
        return DB::table('news')->get();
    }

    public function getOneNewsByID(int $id): ?stdClass
    {
        return DB::table('news')->find($id);
    }
}
