<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{

    public function names(){
        $names = [
            '1' => 'Houssam',
            '2' => 'Samir',
            '3' => 'Fahd',
        ];

        return $names;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namelist = $this->names();
        return view('dateinfo.index', compact('namelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $namelist = $this->names();
        $username = $namelist[$id];
        return view('dateinfo.show', compact('username'));
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
        $namelist = $this->data_array();
        
        // Check if the ID exists in the array
        if(array_key_exists($id, $namelist)) {
            // Unset the element with the specified ID
            unset($namelist[$id]);
        } else {
            // Handle the case where the ID does not exist
            return redirect()->route('todo.index')->with('error', 'Item not found.');
        }

        // Redirect back to the index page
        return redirect()->route('todo.index')->with('success', 'Item deleted successfully.');
    }

}
