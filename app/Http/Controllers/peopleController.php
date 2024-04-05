<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;
class peopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(request $request)
    {
       $title=$request->search;
       $peoples = People::where("fname","like","%".$title."%")
                          ->orWhere("fname".'+'."lname" ,"like","%".$title."%")

                          ->orWhere("lname","like","%".$title."%")
                          ->orWhere("role","like","%".$title."%")
                          ->orWhere("phone","like","%".$title."%")
                          ->orWhere("codm","like","%".$title."%")
                          ->orWhere("address","like","%".$title."%")
                          ->orWhere("birthday","like","%".$title."%")
                          ->get();

    return view("admin/search", ["peoples"=> $peoples]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $people= People::find($id);
        return view('admin/singlepeople', ['people'=> $people]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
