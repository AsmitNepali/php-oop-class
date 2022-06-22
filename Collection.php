<?php
class Collection {
    public $items;

    /**
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {

//        return array_sum(array_map(fn($item) => $item->$key, $this->items));
        return array_sum(array_map(function($item) use ($key){
            return $item->$key;
        }, $this->items));
    }
}
class VideoCollection extends Collection
{
    public function legth()
    {
        return $this->sum('length');
    }
}
class Video {
    public $title;
    public $length;

    /**
     * @param $title
     * @param $length
     */
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}
$collection = new VideoCollection([
    new Video('Video 1', 100),
    new Video('Video 2', 200),
    new Video('Video 3', 300),
]);

var_dump($collection->sum('length'));
