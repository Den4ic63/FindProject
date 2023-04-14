<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::paginate(5);
        return view('projects.index', compact( 'projects'));
    }


    public function create()
    {
        $offices = Office::all();
        return view('projects.create', compact( 'offices'));
    }


    public function store(Request $request)
    {

        $project=Project::create(
            [
                'name'=>$request->name,
                'description'=>$request->description,
                'office_id'=>$request->office,
            ]
        );

        return redirect()->route('home');

    }


    public function show(Project $project)
    {

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
    public function update(Request $request, $id)
    {
        //
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
