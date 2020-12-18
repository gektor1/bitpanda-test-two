<?php

namespace App\Services\Sources;

class SourceCsv implements SourceInterface
{

    public function output(): array
    {
        $rows = array_map('str_getcsv', file(database_path() . '/transactions.csv'));
        $header = array_shift($rows);
        $data = [];
        foreach ($rows as $row) {
            $data[] = array_combine($header, $row);
        }
        return $data;
    }

}
