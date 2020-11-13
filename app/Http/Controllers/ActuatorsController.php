<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Actuators;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ActuatorsController extends Controller

{
    public function getActuators(Request $request){
        $actuator = Actuators::get();
        return response()->json($actuator, 200);
    }
    public function postActuators(Request $request){
        $data = $request->json()->all();
        $actuator = Actuators::create([
            'name'=> $data['name'],
            'api_key'=> $data['api_key'],
            'status'=> $data['status'],
            'email_notice'=> $data['email_notice'],
            'deleted'=> $data['deleted'],
            'ip_or_domaine'=> $data['ip_or_domaine'],
            'start_hour'=> $data['start_hour'],
            'action'=> $data['action'],
            'sunday'=> $data['sunday'],
            'monday'=> $data['monday'],
            'tuesday'=> $data['tuesday'],
            'wednesday'=> $data['wednesday'],
            'thursday'=> $data['thursday'],
            'friday'=> $data['friday'],
            'saturday'=> $data['saturday'],
            'control'=> $data['control'],
            'port'=> $data['port'],
        ]);
        return response()->json($actuator, 201);
    }
    public function putActuators(Request $request){
        $data = $request->json()->all();
        $actuator = Actuators::findOrFail($data['id']);
        $response = $actuator->update([
            'name'=> $data['name'],
            'api_key'=> $data['api_key'],
            'status'=> $data['status'],
            'email_notice'=> $data['email_notice'],
            'deleted'=> $data['deleted'],
            'ip_or_domaine'=> $data['ip_or_domaine'],
            'start_hour'=> $data['start_hour'],
            'action'=> $data['action'],
            'sunday'=> $data['sunday'],
            'monday'=> $data['monday'],
            'tuesday'=> $data['tuesday'],
            'wednesday'=> $data['wednesday'],
            'thursday'=> $data['thursday'],
            'friday'=> $data['friday'],
            'saturday'=> $data['saturday'],
            'control'=> $data['control'],
            'port'=> $data['port'],
        ]);
        return response()->json($actuator, 201);
    }
    public function deleteActuators(Request $request){
        $data = $request->json()->all();
        $actuator = Actuators::findOrFail($data['id']);
        $response = $actuator->delete();
        return response()->json($actuator, 201);
    }
}