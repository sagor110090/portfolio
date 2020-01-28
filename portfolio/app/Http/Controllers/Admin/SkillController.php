<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $skill = Skill::where('name', 'LIKE', "%$keyword%")
                ->orWhere('parcantage', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $skill = Skill::latest()->paginate($perPage);
        }

        return view('skill.index', compact('skill'));
    }


    public function create()
    {
        return view('skill.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Skill::create($requestData);

        return redirect('admin/skill')->with('flash_message', 'Skill added!');
    }


    public function show($id)
    {
        $skill = Skill::findOrFail($id);

        return view('skill.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);

        return view('skill.edit', compact('skill'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $skill = Skill::findOrFail($id);
        $skill->update($requestData);

        return redirect()->back()->with('flash_message', 'Skill updated!');
    }


    public function destroy($id)
    {
        Skill::destroy($id);

        return redirect('admin/skill')->with('flash_message', 'Skill deleted!');
    }
}
