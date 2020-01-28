<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $contact = Contact::where('location', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('linkedin', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $contact = Contact::latest()->paginate($perPage);
        }

        return view('contact.index', compact('contact'));
    }


    public function create()
    {
        return view('contact.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Contact::create($requestData);

        return redirect('admin/contact')->with('flash_message', 'Contact added!');
    }


    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact.edit', compact('contact'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $contact = Contact::findOrFail($id);
        $contact->update($requestData);

        return redirect()->back()->with('flash_message', 'Contact updated!');
    }


    public function destroy($id)
    {
        Contact::destroy($id);

        return redirect('admin/contact')->with('flash_message', 'Contact deleted!');
    }
}
