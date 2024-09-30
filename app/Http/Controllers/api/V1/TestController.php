<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Test;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use Illuminate\Console\View\Components\Task;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TestResource::collection(Test::all());
    }

    /**
     * Show the form for creating a new resource.
     */

    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        $test = Test::create($request->validated());

        return TestResource::make($test);
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return TestResource::make($test);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}