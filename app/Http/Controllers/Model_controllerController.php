<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Model_controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Model_controllerController extends Controller

{
    public function getModel_controller(Request $request){
        $model_controller = Model_controller::get();
        return response()->json($model_controller, 200);
    }
    public function postModel_controller(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controller::create([
            'model_controller'=> $data['model_controller'],
        ]);
        return response()->json($model_controller, 201);
    }
    public function putModel_controller(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controller::findOrFail($data['id']);
        $response = $model_controller->update([
            'model_controller'=> $data['model_controller'],
        ]);
        return response()->json($model_controller, 201);
    }
    public function deleteModel_controller(Request $request){
        $data = $request->json()->all();
        $model_controller = Model_controller::findOrFail($data['id']);
        $response = $model_controller->delete();
        return response()->json($model_controller, 201);
    }
}