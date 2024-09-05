<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Computer;
use App\Patron\ComputerBuilder;
use App\Patron\Director;

class ComputerController extends Controller
{
    public function store(Request $request)
    {
        $director = new Director();
        $builder = new ComputerBuilder();
        $director->setBuilder($builder);

        // Construcción de un computador de alta gama (High-End)
        $director->buildHighEndComputer();
        
        // Para computador básico, usa esta línea en su lugar:
        //$director->buildBasicComputer();
        
        // Para un computador personalizado, puedes usar esto directamente:
         //$builder->buildCPU();
         //$builder->buildStorage();
        

        $computer = $builder->getComputer();

        // Guardar en la base de datos
        $newComputer = Computer::create([
            'cpu' => $computer->parts[0] ?? null,
            'ram' => $computer->parts[1] ?? null,
            'storage' => $computer->parts[2] ?? null,
        ]);

        return response()->json([
            'request-datetime' => Date('Y-m-d H:i:s'),
            'status' => 'success',
            'message' => 'Computadora creada y almacenada exitosamente',
            'data' => $newComputer
            ]);
    }
}
