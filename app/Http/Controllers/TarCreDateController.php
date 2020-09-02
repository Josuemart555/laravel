<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TarjetasCreditosFormRequest;
use App\TarjetaCredito;
use DB;

class TarCreDateController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $fechaInicial=$request->get('fecha_inicial');
            $fechaFin=$request->get('fecha_fin');

            $socios=DB::table('tarjeta_creditos')
            ->whereBetween('fecha_emision',[$fechaInicial, $fechaFin])
            ->orderBy('cod_socio')
            ->paginate(15);
            return view('socios.index',["socios"=>$socios,"searchText"=>$query,"fecha_inicial"=>$fechaInicial,"fecha_fin"=>$fechaFin]);

        }
    }
}
