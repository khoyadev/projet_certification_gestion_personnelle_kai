<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents_employee;

class Documents_employeeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Documents_employee::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Documents_employee::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Documents_employee::find($id);
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
        $documents_employee = Documents_employee::find($id);
        $documents_employee->update($request->all());
        return $documents_employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Documents_employee::destroy($id);
    }

    /**
     * Search for a name
     *
     * @param  str  $fichier
     * @return \Illuminate\Http\Response
     */
    public function search($fichier)
    {
        return Documents_employee::where('fichier','like','%'.$fichier.'%')->get();
    }
}
