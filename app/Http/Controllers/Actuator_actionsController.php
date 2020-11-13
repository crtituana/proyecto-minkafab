<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Actuator_actions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Actuator_actionsController extends Controller

{
    public function getActuator_actions(Request $request){
        $actuator_action = Actuator_actions::get();
        return response()->json($actuator_action, 200);
    }
    public function postActuator_actions(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_actions::create([
            'actuator_action'=> $data['actuator_action'],
        ]);
        return response()->json($actuator_action, 201);
    }
    public function putActuator_actions(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_actions::findOrFail($data['id']);
        $response = $actuator_action->update([
            'actuator_action'=> $data['actuator_action'],
        ]);
        return response()->json($actuator_action, 201);
    }
    public function deleteActuator_actions(Request $request){
        $data = $request->json()->all();
        $actuator_action = Actuator_actions::findOrFail($data['id']);
        $response = $actuator_action->delete();
        return response()->json($actuator_action, 201);
    }
}