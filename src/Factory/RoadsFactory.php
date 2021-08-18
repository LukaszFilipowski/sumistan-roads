<?php

namespace App\Factory;

use App\Model\Road;
use App\Model\RoadCollection;
use League\Csv\Reader;

class RoadsFactory
{
    public function create(): RoadCollection
    {
        $csv = Reader::createFromPath('roads.csv');

        $roads = [];
        foreach ($csv->getRecords() as $record) {
            $roads[] = new Road($record[0], $record[1], (int)$record[2]);
        }

        return new RoadCollection($roads);
    }
}
