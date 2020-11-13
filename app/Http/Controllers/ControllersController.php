<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Controllers;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ControllersController extends Controller

{
    public function getControllers(Request $request){
        $controller = Controllers::get();
        return response()->json($controller, 200);
    }
    public function postControllers(Request $request){
        $data = $request->json()->all();
        $controller = Controllers::create([
            'controller'=> $data['controller'],
        ]);
        return response()->json($controller, 201);
    }
    public function putControllers(Request $request){
        $data = $request->json()->all();
        $controller = Controllers::findOrFail($data['id']);
        $response = $controller->update([
            'controller'=> $data['controller'],
        ]);
        return response()->json($controller, 201);
    }
    public function deleteControllers(Request $request){
        $data = $request->json()->all();
        $controller = Controllers::findOrFail($data['id']);
        $response = $controller->delete();
        return response()->json($controller, 201);
    }
}
