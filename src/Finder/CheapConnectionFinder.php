<?php

namespace App\Finder;

use App\Model\Road;
use App\Model\RoadCollection;
use Fisharebest\Algorithm\Dijkstra;

class CheapConnectionFinder
{
    private RoadCollection $roadCollection;

    public function __construct(RoadCollection $roadCollection)
    {
        $this->roadCollection = $roadCollection;
    }

    public function find(string $from, string $to): ?array
    {
        $roads = $this->roadCollection->getRoadsArray();

        $dijkstra = new Dijkstra($roads);

        $result = $dijkstra->shortestPaths($from, $to);

        if (count($result) > 0) {
            return reset($result);
        }
        return null;
    }


}
