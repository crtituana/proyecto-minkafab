<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Sensor_valor;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Sensor_valorController extends Controller

{
    public function getSensor_valor(Request $request){
        $sensor_valor = Sensor_valor::get();
        return response()->json($sensor_valor, 200);
    }
    public function postSensor_valor(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valor::create([
            'sensor_valor'=> $data['sensor_valor'],
        ]);
        return response()->json($sensor_valor, 201);
    }
    public function putSensor_valor(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valor::findOrFail($data['id']);
        $response = $sensor_valor->update([
            'sensor_valor'=> $data['sensor_valor'],
        ]);
        return response()->json($sensor_valor, 201);
    }
    public function deleteSensor_valor(Request $request){
        $data = $request->json()->all();
        $sensor_valor = Sensor_valor::findOrFail($data['id']);
        $response = $sensor_valor->delete();
        return response()->json($sensor_valor, 201);
    }
}
