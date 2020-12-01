<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// load model
use App\Models\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Club $club)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'contact_person' => 'required',
            'contact_number' => 'required',
            'email'          => 'required|email',
            'address'        => 'required',
            'user_id'        => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }
        
        $club->name = $request->name;
        $club->contact_person = $request->contact_person;
        $club->contact_number = $request->contact_number;
        $club->email = $request->email;
        $club->address = $request->address;
        $club->user_id = $request->user_id;

        $club->save();

        return response()->json([
            "success" => true,
            "message" => "Club created successfully.",
            "data"    => $club
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        return response()->json([
            "success" => true,
            "message" => "Club show successfully.",
            "data"    => $club
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'contact_person' => 'required',
            'contact_number' => 'required',
            'email'          => 'required|email',
            'address'        => 'required',
            'user_id'        => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }
        
        $club->name = $request->name;
        $club->contact_person = $request->contact_person;
        $club->contact_number = $request->contact_number;
        $club->email = $request->email;
        $club->address = $request->address;
        $club->user_id = $request->user_id;

        $club->save();

        return response()->json([
            "success" => true,
            "message" => "Club updated successfully.",
            "data"    => $club
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club->delete();

        return response()->json([
            "success" => true,
            "message" => "Club deleted successfully.",
            "data"    => $club
        ]);
    }
}
