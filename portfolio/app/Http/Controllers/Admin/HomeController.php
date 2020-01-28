<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Home;
use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $home = Home::where('title_1', 'LIKE', "%$keyword%")
                ->orWhere('title_2', 'LIKE', "%$keyword%")
                ->orWhere('facebook_link', 'LIKE', "%$keyword%")
                ->orWhere('linkedin_link', 'LIKE', "%$keyword%")
                ->orWhere('instagram_link', 'LIKE', "%$keyword%")
                ->orWhere('twiter_link', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('background', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $home = Home::latest()->paginate($perPage);
        }

        return view('home.index', compact('home'));
    }


    public function create()
    {
        return view('home.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        

        if ($request->hasFile('image')) {
            $requestData['image']  = $request->image->store('public/uploads/');
        }
        if ($request->hasFile('background')) {
            $requestData['background']  = $request->background->store('public/uploads/');
        }
        
        Home::create($requestData);

        return redirect('admin/home')->with('flash_message', 'Home added!');
    }


    public function show($id)
    {
        $home = Home::findOrFail($id);

        return view('home.show', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);

        return view('home.edit', compact('home'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image']  = $request->image->store('public/uploads');
            Storage::delete($request->oldImage);
        }
        if ($request->hasFile('background')) {
            $requestData['background']  = $request->background->store('public/uploads');
            Storage::delete($request->oldBackground);

        }
        $home = Home::findOrFail($id);
        $home->update($requestData);

        return redirect()->back()->with('flash_message', 'Home updated!');
    }


    public function destroy($id)
    {
        Home::destroy($id);

        return redirect('admin/home')->with('flash_message', 'Home deleted!');
    }
}
