<?php

namespace App\Patron;

use App\Patron\Builder;

class Director
{
    private $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildBasicComputer(): void
    {
        $this->builder->buildCPU();
    }

    public function buildHighEndComputer(): void
    {
        $this->builder->buildCPU();
        $this->builder->buildRAM();
        $this->builder->buildStorage();
    }
}