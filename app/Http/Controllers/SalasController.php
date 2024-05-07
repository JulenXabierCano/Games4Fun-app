<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Sala;

class SalasController extends Controller
{

    public function crearSala(Request $request) {
        return Sala::create([
            "jugador_1" => $request->usr,
            "privada" => $request->privada,
        ]);
    }

    public function datosSala(Request $request) {
        return Sala::where("id", $request->id_sala);
    }

    public static function limpiar_salas() {
        $salas = Sala::all();
        foreach ($salas as $sala) {
            $sala->delete();
        };
    }
}
