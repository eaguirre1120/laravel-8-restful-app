<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => "required",
            'client_company_name' => "required",
            'client_phone' => "required",
            'client_email' => "required|email",
            'project_name' => "required"
        ]);

        if ($validator->fails()) {
            return response()->json('Conflict error validation', 409);
        }

        $project = Project::create($request->all());
        $data = [
            'project_id' => $project->id,
            'position' => 0
        ];

        $quote = Quote::create($data);

        return response()->json([$project, $quote], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => "required",
            'client_company_name' => "required",
            'client_phone' => "required",
            'client_email' => "required|email",
            'project_name' => "required"
        ]);

        if ($validator->fails()) {
            return response()->json('Conflict error validation', 409);
        }

        $project = Project::findOrFail($id);
        $project->update($request->all());

        return response()->json($project, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
