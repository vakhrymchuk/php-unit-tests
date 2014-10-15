<?php

class Pageable
{
    public $count_of_objects;
    public $count_objects_on_page;

    /**
     * Counts links near the current.
     */
    const NEIGHBOR = 2;

    const DOTS = '...';

    function __construct($count_of_objects, $count_objects_on_page)
    {
        $this->count_objects_on_page = $count_objects_on_page;
        $this->count_of_objects = $count_of_objects;
    }

    public function get_count_of_pages()
    {
        return ceil($this->count_of_objects / $this->count_objects_on_page);
    }

    public function getText($current)
    {
        $s = '';
        $first = max(1, $current - self::NEIGHBOR);
        $last = min($this->get_count_of_pages(), $current + self::NEIGHBOR);

        if ($first > 1) {
            $s .= '1 ' . self::DOTS . ' ';
        }

        for ($i = $first; $i <= $last; $i++) {
            if ($i == $current) {
                $s .= '<b>' . $i . '</b> ';
            } else {
                $s .= $i . ' ';
            }
        }
        if ($last < $this->get_count_of_pages()) {
            $s .= self::DOTS . ' ' . $this->get_count_of_pages();
        }

        return trim($s);
    }
}
