<?php

namespace App\PatronPrototipo;

interface IProductPrototype
{
    public function cloneProduct(): IProductPrototype;
}