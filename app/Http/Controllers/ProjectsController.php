<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects.index',[
            'projects' => $projects
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){
        $project              = new Project();
        $project->title       = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function edit($id){
        $project = Project::find($id);
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update($id, Request $request){
        $project              = Project::find($id);
        $project->title       = request('title');
        $project->description = request('description');
        $project->save();
        return redirect(route('projects.index'));
    }


}
