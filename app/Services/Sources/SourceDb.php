<?php

namespace App\Services\Sources;

use App\Models\Transaction;

class SourceDb implements SourceInterface
{
    public function output() : array
    {
        return Transaction::all()->toArray();
    }
}