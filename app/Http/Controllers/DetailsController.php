<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;

class DetailsController extends Controller
{
    public function index()
    {
        $details = Details::all();
        return view ('details.index')->with('details', $details);
    }
    
    public function create()
    {
        return view('details.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Details::create($input);
        return redirect('detail')->with('flash_message', 'Details Addedd!');  
    }
    
    public function show($id)
    {
        $detail = Details::find($id);
        return view('details.show')->with('details', $detail);
    }
    
    public function edit($id)
    {
        $detail = Details::find($id);
        return view('details.edit')->with('details', $detail);
    }
  
    public function update(Request $request, $id)
    {
        $detail = Details::find($id);
        $input = $request->all();
        $detail->update($input);
        return redirect('detail')->with('flash_message', 'Details Updated!');  
    }
  
    public function destroy($id)
    {
        Details::destroy($id);
        return redirect('detail')->with('flash_message', 'Details deleted!');  
    }
}
