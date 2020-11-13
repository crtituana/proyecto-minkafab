<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Sensors;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class SensorsController extends Controller

{
    public function getSensors(Request $request){
        $sensor = Sensors::get();
        return response()->json($sensor, 200);
    }
    public function postSensors(Request $request){
        $data = $request->json()->all();
        $sensor = Sensors::create([
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
    public function putSensors(Request $request){
        $data = $request->json()->all();
        $sensor = Sensors::findOrFail($data['id']);
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
    public function deleteSensors(Request $request){
        $data = $request->json()->all();
        $sensor = Sensors::findOrFail($data['id']);
        $response = $sensor->delete();
        return response()->json($sensor, 201);
    }
}