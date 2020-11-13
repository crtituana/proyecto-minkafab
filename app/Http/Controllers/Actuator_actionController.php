<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Actuator_action;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Actuator_actionController extends Controller

{
    public function getActuator_action(Request $request){
        $actuator_action = Actuator_action::get();
        return response()->json($actuator_action, 200);
    }
    public function postActuator_action(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_action::create([
            'actuator_action'=> $data['actuator_action'],
        ]);
        return response()->json($actuator_action, 201);
    }
    public function putActuator_action(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_action::findOrFail($data['id']);
        $response = $actuator_action->update([
            'actuator_action'=> $data['actuator_action'],
        ]);
        return response()->json($actuator_action, 201);
    }
    public function deleteActuator_action(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_action::findOrFail($data['id']);
        $response = $actuator_action->delete();
        return response()->json($actuator_action, 201);
    }
}