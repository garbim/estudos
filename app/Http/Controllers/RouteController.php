<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateInterval;

class RouteController extends Controller
{
    public $name = "route";

    public function index()
    {
        $data = [
            'title' => 'Route',
            'name' => 'Nicole',
            'dias' => $this->listadatas(),
        ];
        return view('route', $data);
    }

    public function listadatas()
    {

        $htmlInicio = '<div class="tamanho-div-calend"><ul class="border rounded-circle">';
        $htmlFim = '<ul><div class="dias p"></div></div>';

        $date = new DateTime(); // Sem parametro pega a data atual
        $intervalInicial = new DateInterval('P' . date('w') . 'D'); // Definir intervalo
        $inicio = $date->sub($intervalInicial);

        $dias[] = $inicio->format('d');


        $date = new DateTime($inicio->format('Y-m-d'));
        for ($i = 1; $i <= 6; $i++) {
            $intervalFinal = new DateInterval('P1D'); //Definir intervalo
            $fim = $date->add($intervalFinal);
            $dias[] = $fim->format('d');
        }

        return $dias;
    }
}
