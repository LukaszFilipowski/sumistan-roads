<?php

class Road
{
    private string $from;
    private string $to;
    private int $cost;

    public function __construct(string $from, string $to, int $cost)
    {
        $this->from = $from;
        $this->to = $to;
        $this->cost = $cost;
    }
}
