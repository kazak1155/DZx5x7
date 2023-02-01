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
        $users = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'position' => $request->input('position'),
            'address' => $request->input('address')
        ];
//        var_dump(json_decode($request->all()));
//        echo '<br>';
        var_dump($users);
    }

    public function update(Request $request, $id)
    {
        $users = [
            'id' => $id,
            'firstName' => $request->json()->get('firstName'),
            'lastName' => $request->json()->get('lastName'),
            'email' => $request->json()->get('email'),
            'position' => $request->json()->get('position'),
            'address' => $request->json()->get('address')
        ];

        var_dump($users);
    }
}

