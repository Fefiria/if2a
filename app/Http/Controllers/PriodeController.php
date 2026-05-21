<?php

namespace App\Http\Controllers;

use App\Models\Priode;
use Illuminate\Http\Request;

class PriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Priode::all();
        return view('periode.newindex', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Priode $priode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priode $priode)
    {
        $priode = Fakultas::find($priode);
        // dd($priode);
        return view ('priode.edit', compact ('priode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Priode $priode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priode $priode)
    {
        $priode = Fakultas::find($priode);

        // dd($fakultas);
        $priode->delete();//hapus
        return redirect()->route('priode.index'); 
    }
}
