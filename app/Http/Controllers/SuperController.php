<?php

namespace App\Http\Controllers;
use App\Models\Superhero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superhero::all(); 

         return view('superhero.index', compact('superheroes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superhero.create'); 
    }

    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'real_name' => 'required|max:75', 
            'super_name' => 'required|max:75', 
            'photo' => 'required', 
            'description' => 'required', 
          ]); 
          Superhero::create($validatedData); 
        
          return redirect('/superhero')->with('success', 'Superhero is successfully saved'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = Superhero::findOrFail($id); 

        return view('superhero.show', compact('superhero')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superhero = Superhero::findOrFail($id); 

  return view('superhero.edit', compact('superhero')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([ 
            'real_name' => 'required|max:75', 
            'super_name' => 'required|max:75', 
            'photo' => 'required',
            'description' => 'required',
          ]); 
          Superhero::whereId($id)->update($validatedData); 
        
          return redirect('/superhero')->with('success', 'Superhero data is successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superhero = Superhero::findOrFail($id); 
        $superhero->delete(); 

    return redirect('/superhero')->with('success', 'Superhero data is successfully deleted'); 
    }
}
