<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Model_controllers;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Model_controllersController extends Controller

{
    public function getModel_controllers(Request $request){
        $model_controller = Model_controllers::get();
        return response()->json($model_controller, 200);
    }
    public function postModel_controllers(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controllers::create([
            'model_controller'=> $data['model_controller'],
        ]);
        return response()->json($model_controller, 201);
    }
    public function putModel_controllers(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controllers::findOrFail($data['id']);
        $response = $model_controller->update([
            'model_controller'=> $data['model_controller'],
        ]);
        return response()->json($model_controller, 201);
    }
    public function deleteModel_controllers(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controllers::findOrFail($data['id']);
        $response = $model_controller->delete();
        return response()->json($model_controller, 201);
    }
}