<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// ---------------------------------------- //

//CRUD customer
Route::get('/customer', 'CustomerController@getCustomer');
Route::post('/customer', 'CustomerController@postCustomer');
Route::put('/customer', 'CustomerController@putCustomer');
Route::delete('/customer', 'CustomerController@deleteCustomer');

//CRUD sensor
Route::get('/sensor', 'SensorController@getSensor');
Route::post('/sensor', 'SensorController@postSensor');
Route::put('/sensor', 'SensorController@putSensor');
Route::delete('/sensor', 'SensorController@deleteSensor');

//CRUD Model_controller
Route::get('/model_controller', 'Model_controllerController@getModel_controller');
Route::post('/model_controller', 'Model_controllerController@postModel_controller');
Route::put('/model_controller', 'Model_controllerController@putModel_controller');
Route::delete('/model_controller', 'Model_controllerController@deleteModel_controller');

//CRUD sensor_valor
Route::get('/sensor_valor', 'Sensor_valorController@getSensor_valor');
Route::post('/sensor_valor', 'Sensor_valorController@postSensor_valor');
Route::put('/sensor_valor', 'Sensor_valorController@putSensor_valor');
Route::delete('/sensor_valor', 'Sensor_valorController@deleteSensor_valor');

//CRUD controller
Route::get('/controller', 'ControllerController@getController');
Route::post('/controller', 'ControllerController@postController');
Route::put('/controller', 'ControllerController@putController');
Route::delete('/controller', 'ControllerController@deleteController');

//CRUD actuator_action
Route::get('/actuator_action', 'Actuator_actionController@getActuator_action');
Route::post('/actuator_action', 'Actuator_actionController@postActuator_action');
Route::put('/actuator_action', 'Actuator_actionController@putActuator_action');
Route::delete('/actuator_action', 'Actuator_actionController@deleteActuator_action');

//CRUD actuator
Route::get('/actuator', 'ActuatorController@getActuator');
Route::post('/actuator', 'ActuatorController@postActuator');
Route::put('/actuator', 'ActuatorController@putActuator');
Route::delete('/actuator', 'ActuatorController@deleteActuator');