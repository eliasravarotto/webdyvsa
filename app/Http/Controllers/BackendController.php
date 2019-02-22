<?php

namespace App\Http\Controllers;

use App\ImagenGaleriaUsado;
use App\MensajeEmail;
use App\Modelo;
use App\Repositories\ModeloRepository;
use App\TipoServicio;
use App\TurnoServicio;
use App\Usado;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackendController extends Controller
{
    public function inicio()
    {
        $cant_consultas = MensajeEmail::all()->count();
        $cant_de_turnos = TurnoServicio::all()->count();
        $cant_usados = Usado::all()->count();
        $cant_usuarios = User::all()->count();
        $cant_modelos = Modelo::all()->count();
        return view('backend.inicio', compact('cant_consultas', 'cant_de_turnos', 'cant_usados', 'cant_usuarios', 'cant_modelos'));
    }
}