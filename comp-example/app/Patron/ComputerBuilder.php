<?php
namespace App\Patron;


use App\Models\Computer;
use App\Patron\Builder;
use App\Patron\Director;

class ComputerBuilder implements Builder
{
    private $computer;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->computer = new Computer();
        $this->computer->parts = [];  // Inicializa el array de parts
    }

    public function buildCPU(): void
    {
        $parts = $this->computer->parts;
        $parts[] = "Intel i7 CPU";
        $this->computer->parts = $parts;
    }

    public function buildRAM(): void
    {
        $parts = $this->computer->parts;
        $parts[] = "16GB RAM";
        $this->computer->parts = $parts;
    }

    public function buildStorage(): void
    {
        $parts = $this->computer->parts;
        $parts[] = "512GB SSD";
        $this->computer->parts = $parts;
    }

    public function getComputer(): Computer
    {
        $result = $this->computer;
        $this->reset();

        return $result;
    }
}