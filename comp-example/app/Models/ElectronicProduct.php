<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\PatronPrototipo\IProductPrototype;

class ElectronicProduct extends Model implements IProductPrototype
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'sku', 'brand', 'model'];

    // Implementación del método de clonación
    public function cloneProduct(): IProductPrototype
    {
        return self::create([
            'name' => $this->name.' (clone)',
            'description' => $this->description,
            'price' => $this->price,
            'sku' => $this->sku . '-CLONE', // Modificamos el SKU para el clon
            'brand' => $this->brand,
            'model' => $this->model
        ]);
    }
}