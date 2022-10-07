<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pokemon extends Controller
{
    //
    public function buscar(Request $request)
    {
        if ($request->exists('pokemon'))
            $pokemon = $request->input('pokemon');

        $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon"); //Transferencia de Archivos
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true); //Obtiene Info
        $response = curl_exec($api); //Ejecución
        curl_close($api); //Cierra y libera recursos
        $json = json_decode($response); //Codificacion en Json

        $name = $json->name;
        $foto = $json->sprites->front_default;

        return view('pokeapi.buscado', compact('name', 'foto'));
    }

    public function listar(Request $request)
    {

        if ($request->exists('limit')) {
            $limit = $request->input('limit');
        } else {
            $limit = 10;
        }

        $pokemones = array();
        for ($i = $limit - 9; $i <= $limit; $i++) {

            $api = curl_init("https://pokeapi.co/api/v2/pokemon/$i");
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($api);
            curl_close($api);
            $pokemon = json_decode($response);
            array_push($pokemones, $pokemon);
        };

        return view('pokeapi.lista', compact('pokemones'));
    }

    public function detallar(Request $request)
    {
        if ($request->exists('pokemon'))
            $pokemon = $request->input('pokemon');

        $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($api);
        curl_close($api);
        $json = json_decode($response);

        $name = $json->name;
        $id = $json->id;

        foreach ($json->abilities as $k => $v)
            $abilities = $v->ability->name;

        $type = $json->types[0]->type->name;
        $foto = $json->sprites->front_default;
        $foto2 = $json->sprites->back_default;

        return view('pokeapi.detalles', compact('name', 'id', 'abilities', 'type', 'foto', 'foto2'));
    }
}
