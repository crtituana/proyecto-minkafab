<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Sensor;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class SensorController extends Controller

{
    public function getSensor(Request $request){
        $sensor = Sensor::get();
        return response()->json($sensor, 200);
    }
    public function postSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::create([
            'name'=> $data['name'],
            'measure'=> $data['measure'],
            'api_key'=> $data['api_key'],
            'status'=> $data['status'],
            'api_key_coded'=> $data['api_key_coded'],
            'email_notice'=> $data['email_notice'],
            'deleted'=> $data['deleted'],
            'sensor_type'=> $data['sensor_type'],
            'min_value'=> $data['min_value'],
            'max_value'=> $data['max_value'],
            'act_under_min_val'=> $data['act_under_min_val'],
            'act_over_max_val'=> $data['act_over_max_val'],
            'sample_time'=> $data['sample_time'],
            'control'=> $data['control'],
            'intervalo'=> $data['intervalo'],
        ]);
        return response()->json($sensor, 201);
    }
    public function putSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::findOrFail($data['id']);
        $response = $sensor->update([
            'name'=> $data['name'],
            'measure'=> $data['measure'],
            'api_key'=> $data['api_key'],
            'status'=> $data['status'],
            'api_key_coded'=> $data['api_key_coded'],
            'email_notice'=> $data['email_notice'],
            'deleted'=> $data['deleted'],
            'sensor_type'=> $data['sensor_type'],
            'min_value'=> $data['min_value'],
            'max_value'=> $data['max_value'],
            'act_under_min_val'=> $data['act_under_min_val'],
            'act_over_max_val'=> $data['act_over_max_val'],
            'sample_time'=> $data['sample_time'],
            'control'=> $data['control'],
            'intervalo'=> $data['intervalo'],
        ]);
        return response()->json($sensor, 201);
    }
    public function deleteSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::findOrFail($data['id']);
        $response = $sensor->delete();
        return response()->json($sensor, 201);
    }
}