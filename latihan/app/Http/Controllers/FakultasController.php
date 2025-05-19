<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listfakultas = Fakultas::all(); //select * from fakultas;
        return view("fakultas.index", 
            ['listfakultas' => $listfakultas]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("fakultas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Form Validation
        $data = $request->validate([
            'nama' => 'required|min:3|max:4'
        ]);
        Fakultas::insert([
            'nama' => $data['nama'],
        ]);
        return redirect("fakultas")->with("status", "Fakultas berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
