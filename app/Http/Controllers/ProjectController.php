<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function addUserinProject(Project $project)
    {
        $user = Auth::user();

//        $user->projects()->attach($project->id);
        $project->users()->attach($user);

        return redirect()->route('home');
    }

    public function deleteUserinProject(Project $project)
    {
        $user = Auth::user();
        $project->users()->detach($user);
        return redirect()->route('home');
    }

}
