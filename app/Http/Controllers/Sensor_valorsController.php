<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Sensor_valors;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Sensor_valorsController extends Controller

{
    public function getSensor_valors(Request $request){
        $sensor_valor = Sensor_valors::get();
        return response()->json($sensor_valor, 200);
    }
    public function postSensor_valors(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valors::create([
            'sensor_valor'=> $data['sensor_valor'],
        ]);
        return response()->json($sensor_valor, 201);
    }
    public function putSensor_valors(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valors::findOrFail($data['id']);
        $response = $sensor_valor->update([
            'sensor_valor'=> $data['sensor_valor'],
        ]);
        return response()->json($sensor_valor, 201);
    }
    public function deleteSensor_valors(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valors::findOrFail($data['id']);
        $response = $sensor_valor->delete();
        return response()->json($sensor_valor, 201);
    }
}
