<?php


namespace App\Models;


class News
{
    public int $id;
    public string $title;
    public string $text;
    public int $categories;

    /**
     * News constructor.
     * @param int $id
     * @param string $title
     * @param string $text
     * @param int $categories
     */
    public function __construct(int $id, string $title, string $text, int $categories)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->categories = $categories;
    }


}
