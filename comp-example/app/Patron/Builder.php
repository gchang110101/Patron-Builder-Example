<?php

namespace App\Patron;


/**
 * La interfaz Builder especifica métodos para crear las diferentes partes del computador.
 */
interface Builder
{
    public function buildCPU(): void;

    public function buildRAM(): void;

    public function buildStorage(): void;
}