<?php

namespace App\Model;

class Road
{
    public string $from;
    public string $to;
    public int $cost;

    public function __construct(string $from, string $to, int $cost)
    {
        $this->from = $from;
        $this->to = $to;
        $this->cost = $cost;
    }
}
