<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $about = About::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('linkedin', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $about = About::latest()->paginate($perPage);
        }

        return view('about.index', compact('about'));
    }


    public function create()
    {
        return view('about.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        About::create($requestData);

        return redirect('admin/about')->with('flash_message', 'About added!');
    }


    public function show($id)
    {
        $about = About::findOrFail($id);

        return view('about.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);

        return view('about.edit', compact('about'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $about = About::findOrFail($id);
        $about->update($requestData);

        return redirect()->back()->with('flash_message', 'About updated!');
    }


    public function destroy($id)
    {
        About::destroy($id);

        return redirect('admin/about')->with('flash_message', 'About deleted!');
    }
}
