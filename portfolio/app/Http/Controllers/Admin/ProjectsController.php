<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $projects = Project::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $projects = Project::latest()->paginate($perPage);
        }

        return view('admin.projects.index', compact('projects'));
    }


    public function create()
    {
        return view('admin.projects.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Project::create($requestData);

        return redirect('admin/projects')->with('flash_message', 'Project added!');
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $project = Project::findOrFail($id);
        $project->update($requestData);

        return redirect('admin/projects')->with('flash_message', 'Project updated!');
    }


    public function destroy($id)
    {
        Project::destroy($id);

        return redirect('admin/projects')->with('flash_message', 'Project deleted!');
    }
}
