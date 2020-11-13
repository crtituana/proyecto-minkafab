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
Route::get('/customer', 'CustomersController@getCustomers');
Route::post('/customer', 'CustomersController@postCustomers');
Route::put('/customer', 'CustomersController@putCustomers');
Route::delete('/customer', 'CustomersController@deleteCustomers');

//CRUD sensor
Route::get('/sensor', 'SensorsController@getSensors');
Route::post('/sensor', 'SensorsController@postSensors');
Route::put('/sensor', 'SensorsController@putSensors');
Route::delete('/sensor', 'SensorsController@deleteSensors');

//CRUD Model_controller
Route::get('/model_controller', 'Model_controllersController@getModel_controllers');
Route::post('/model_controller', 'Model_controllersController@postModel_controllers');
Route::put('/model_controller', 'Model_controllersController@putModel_controllers');
Route::delete('/model_controller', 'Model_controllersController@deleteModel_controllers');

//CRUD sensor_valor
Route::get('/sensor_valor', 'Sensor_valorsController@getSensor_valors');
Route::post('/sensor_valor', 'Sensor_valorsController@postSensor_valors');
Route::put('/sensor_valor', 'Sensor_valorsController@putSensor_valors');
Route::delete('/sensor_valor', 'Sensor_valorsController@deleteSensor_valors');

//CRUD controller
Route::get('/controller', 'ControllersController@getControllers');
Route::post('/controller', 'ControllersController@postControllers');
Route::put('/controller', 'ControllersController@putControllers');
Route::delete('/controller', 'ControllersController@deleteControllers');

//CRUD actuator_action
Route::get('/actuator_action', 'Actuator_actionsController@getactuator_actions');
Route::post('/actuator_action', 'Actuator_actionsController@postactuator_actions');
Route::put('/actuator_action', 'Actuator_actionsController@putActuator_actions');
Route::delete('/actuator_action', 'Actuator_actionsController@deleteActuator_actions');

//CRUD actuator
Route::get('/actuator', 'ActuatorsController@getActuators');
Route::post('/actuator', 'ActuatorsController@postActuators');
Route::put('/actuator', 'ActuatorsController@putActuators');
Route::delete('/actuator', 'ActuatorsController@deleteActuators');