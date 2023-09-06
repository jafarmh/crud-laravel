<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerEditRequest;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        return response()->json([
            'success' => true,
            'data' =>Customer::all(),
        ]);
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
    public function store(CustomerRequest $request)
    {
        $record=Customer::create($request->validated());
        return response()->json([
            'success' => true,
            'data' =>$record,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $record=Customer::where("id",$id)->first();
        return response()->json([
            'success' => true,
            'data' =>$record,
        ]);
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
    public function update(CustomerEditRequest $request, string $id)
    {
        $result=Customer::where("id",$id)->update($request->validated());
        return response()->json([
            'success' => true,
            'data' =>$result,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Customer::where("id",$id)->delete();
        return response()->json([
            'success' => true,
            'data' =>$result,
        ]);
    }
}
