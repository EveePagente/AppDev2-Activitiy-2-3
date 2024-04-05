<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id"=> 1,
                "name"=> "Elsa",
                "email"=> "ambotsaimo.gmail.com",
                "phone"=> "1-234-567-8910"
           ],
           [
                "id"=> 2,
                "name"=> "Anna",
                "email"=> "ambotsaimo.gmail.com",
                "phone"=> "1-234-567-8910"
           ],
           [
                "id"=> 3,
                "name"=> "Olap",
                "email"=> "ambotsaimo.gmail.com",
                "phone"=> "1-234-567-8910"
           ],
        ];
            return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
