<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Find;

class ChartController extends Controller
{
    public function getChartData()
    {
        // Numero di reperti validati
        $totalFinds = Find::count();
        $validatedFinds = Find::where('validato', 1)->count();

        // Numero di reperti considerando la molteplicità
        $findsWithMultiplicity = \DB::table('compositions')
            ->select(\DB::raw('SUM(molteplicita) as total_molteplicita'), \DB::raw('COUNT(id_reperto) as total_reperti'))
            ->first();

        // Restituisci i dati come JSON
        return response()->json([
            'totalFinds' => $totalFinds,
            'validatedFinds' => $validatedFinds,
            'totalReperti' => $findsWithMultiplicity->total_reperti,
            'totalMolteplicita' => $findsWithMultiplicity->total_molteplicita,
        ]);
    }
}
