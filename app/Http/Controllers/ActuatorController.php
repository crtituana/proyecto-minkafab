<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Actuator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ActuatorController extends Controller

{
    /*crud para traer actuator*/
    public function getActuator(Request $request){
        $actuator = Actuator::get();
        return response()->json($actuator, 200);
    }
    /*crud para crear actuator*/
    public function postActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::create([
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
    /*crud para actualizar actuator*/
    public function putActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::findOrFail($data['id']);
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
    /*crud para eliminar actuator*/
    public function deleteActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::findOrFail($data['id']);
        $response = $actuator->delete();
        return response()->json($actuator, 201);
    }
}