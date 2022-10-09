<?php


namespace App\Models;


class AllNews
{
    public array $allNews = [];

    public function __construct()
    {
        $this->createAllNews();
    }

    public function createAllNews(): array
    {
        $sportNews = new News(1, "спортивный заголовок", "новость о спорте", 1);
        $politicsNews = new News(2, "политический заголовок заголовок", "новость о политике", 2);
        $economyNews = new News(3, "экономический заголовок", "новость об экономике", 3);
        $tourismNews = new News(4, "туристический заголовок", "новость о туризме", 4);
        $scienceNews = new News(5, "научный заголовок", "новость о науке", 5);

        $this->allNews[] = $scienceNews;
        $this->allNews[] = $economyNews;
        $this->allNews[] = $tourismNews;
        $this->allNews[] = $sportNews;
        $this->allNews[] = $politicsNews;
        return $this->allNews;
    }



}
