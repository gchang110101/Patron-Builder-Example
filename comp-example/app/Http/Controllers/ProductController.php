<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ClothingProduct;
use App\Models\ElectronicProduct;

class ProductController extends Controller
{
    // Crear un producto de ropa
    public function storeClothingProduct(Request $request)
    {
        $product = ClothingProduct::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Clothing product created successfully',
            'product' => $product
        ], 201);
    }

    // Crear un producto electrónico
    public function storeElectronicProduct(Request $request)
    {
        $product = ElectronicProduct::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Electronic product created successfully',
            'product' => $product
        ], 201);
    }

    // Clonar un producto de ropa
    public function cloneClothingProduct($id)
    {
        $product = ClothingProduct::findOrFail($id);
        $clonedProduct = $product->cloneProduct();

        return response()->json([
            'status' => 'success',
            'message' => 'Clothing product cloned successfully',
            'product' => $clonedProduct
        ], 201);
    }

    // Clonar un producto electrónico
    public function cloneElectronicProduct($id)
    {
        $product = ElectronicProduct::findOrFail($id);
        $clonedProduct = $product->cloneProduct();

        return response()->json([
            'status' => 'success',
            'message' => 'Electronic product cloned successfully',
            'product' => $clonedProduct
        ], 201);
    }
}
