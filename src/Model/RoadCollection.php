<?php

namespace App\Model;

class RoadCollection
{
    /** @var Road[] */
    private iterable $roads;

    public function __construct(iterable $roads)
    {
        $this->roads = $roads;
    }

    public function getRoadsArray(): array
    {
        $result = [];
        foreach ($this->roads as $road) {
            if (!isset($result[$road->from])) {
                $result[$road->from] = [];
            }
            $result[$road->from][$road->to] = $road->cost;

            // drogami można się poruszać w obydwie strony :)
            if (!isset($result[$road->to])) {
                $result[$road->to] = [];
            }
            $result[$road->to][$road->from] = $road->cost;
        }
        return $result;
    }
}
