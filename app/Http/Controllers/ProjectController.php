<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('pages.projects', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'p_name' => 'required',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required_with:start_date|after_or_equal:start_date',
            'manager_id' => 'required',
            'assigned_users' => 'required',
            'description' => 'required'
        ]);

        $creatProject = [
            'p_name' => $request->p_name,
            'description' => $request->description,
            'p_status' => $request->p_status ?? null,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'manager_id' => $request->manager_id,
            'created_by' => auth()->user()->id,
            'assigned_users' => $request->assigned_users,
            'p_image' => $request->p_image ?? null
        ];

        $result = Project::create($creatProject);

        if ($result) {
            return redirect()->route('home')->with('sucesss', 'Project created successfully.');
        } else {
            return redirect()->route('home')->with('error', 'some thing went wrong, try again.');
        }

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
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return $request->all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
