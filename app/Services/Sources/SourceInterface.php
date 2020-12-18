<?php

namespace App\Services\Sources;

interface SourceInterface
{
    public function output() : array;
}