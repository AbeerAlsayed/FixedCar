<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $client=Client::all();
        $vehicle=Vehicle::all();
dd($client);
//        $jsonUserData=$vehicle->clients;

//        $jsonUserData = '[
//           { "id": 1, "name": "TechvBlogs", "email": "admin@techvblogs.com"},
//           { "id": 2, "name": "Support", "email": "support@techvblogs.com"},
//           { "id": 3, "name": "SslForWeb", "email": "admin@sslforweb.com"}
//        ]';


        $userData = json_decode($jsonUserData, true);
        $arrayData = array_map(function($item) {
            return (array)$item;
        }, $userData);
        dd($arrayData[1]['brand']);
//        $userData = json_decode($jsonUserData, true);
//        $result = array_map(function ($user) {
//            return (array)$user;
//        }, $userData);
//        print_r(array_map(function ($i,$userData) {
//            return (array)$userData[$i];
//        }, $userData));

//        $results = $userData->pluck('name');
//        $userData->map(function ($product) {
//            return $product->name;
//        });
//        echo $userData;
//        dd($userData);

//        return view('');
    }
}
->displayUsing(function ($name) {

    $x=json_decode($name->Vehicles,true);
    $res= array_map(function($item) {
        return (array)$item;
    }, $x);

    $jsonUserData=$name
        ->join('vehicles', 'clients.id', '=', 'vehicles.client_id')
        ->where('clients.id', '=', $name->id)
        ->where('vehicles.brand', '=', $res[$name->id]['brand'])
        ->get(['clients.name', 'vehicles.brand']);
    $userData = json_decode($jsonUserData, true);
    return array_map(function($item) {
        return (array)$item;
    }, $userData);
}),
