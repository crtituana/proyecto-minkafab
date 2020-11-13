<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Customers;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CustomersController extends Controller

{
    
    public function getCustomers(Request $request){
        $customer = Customers::get();
        return response()->json($customer, 200);
    }
    public function postCustomers(Request $request){
        $data = $request->json()->all();
        $customer = Customers::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
            'address_1'=>$data['address_1'],
            'address_2'=>$data['address_2'],
            'city'=>$data['city'],
            'region'=>$data['region'],
            'postal_code'=>$data['postal_code'],
            'shipping_region_id'=>$data['shipping_region_id'],
            'mob_phone'=>$data['mob_phone'],
            'country_id'=>$data['country_id'],
            'status_id'=> $data['status_id'],
            'key'=> $data['key'],
            'created_on'=> $data['created_on'],
            'domain'=> $data['domain'],
            'time_zone'=> $data['time_zone'],
            'attemps'=> $data['attemps'],
            'locked_on'=> $data['locked_on'],
            'telegram_id'=> $data['telegram_id'],    
        ]);
        return response()->json($customer, 201);
    }
    public function putCustomers(Request $request){
        $data = $request->json()->all();
        $customer = Customers::findOrFail($data['id']);
        $response = $customer->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
            'address_1'=>$data['address_1'],
            'address_2'=>$data['address_2'],
            'city'=>$data['city'],
            'region'=>$data['region'],
            'postal_code'=>$data['postal_code'],
            'shipping_region_id'=>$data['shipping_region_id'],
            'mob_phone'=>$data['mob_phone'],
            'country_id'=>$data['country_id'],
            'status_id'=> $data['status_id'],
            'key'=> $data['key'],
            'created_on'=> $data['created_on'],
            'domain'=> $data['domain'],
            'time_zone'=> $data['time_zone'],
            'attemps'=> $data['attemps'],
            'locked_on'=> $data['locked_on'],
            'telegram_id'=> $data['telegram_id'],
        ]);
        return response()->json($customer, 201);
    }
    public function deleteCustomers(Request $request){
        $data = $request->json()->all();
        $customer = Customers::findOrFail($data['id']);
        $response = $customer->delete();
        return response()->json($customer, 201);
    }
}