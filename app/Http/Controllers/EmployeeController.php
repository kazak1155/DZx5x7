<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $users;

    protected function getPath(Request $request)
    {
        return $request->path();
    }

    protected function getUrl(Request $request)
    {
        return $request->url();
    }

    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $arrayJson = json_decode($request->input('workData'), true);
        $users = [
            'user' => [
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'position' => $request->input('position'),
                'residential_address' => $request->input('residential_address'),
                array_key_first($arrayJson) => $arrayJson['address']
            ]
        ];
        echo '<pre>';
        print_r($users);
        echo '</pre>';
    }

    public function update(Request $request, $id)
    {
//        var_dump($request->input('user.lastName')); exit;
        $arrayJson = json_decode($request->input('user.address'), true);
        $users = [
            'user' => [
                'firstName' => json_decode($request->input('firstName')),
                'lastName' => json_decode($request->input('lastName')),
                'email' => json_decode($request->input('email')),
                'position' => json_decode($request->input('position')),
                'residential_address' => json_decode($request->input('residential_address')),
                array_key_first($arrayJson) => $arrayJson['address']
            ]
        ];
        echo '<pre>';
        print_r($users);
        echo '</pre>';
    }
}
