<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhans = keluhan::latest()->paginate(5);
 
        return view('keluhans.index',compact('keluhans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluhans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'detail' => 'required',
            'durasi' => 'required',
        ]);
 
        keluhan::create($request->all());
 
        return redirect()->route('keluhans.index')
                        ->with('success','Keluhan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(keluhan $keluhan)
    {
        return view('keluhans.show',compact('keluhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(keluhan $keluhan)
    {
        return view('keluhans.edit',compact('keluhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keluhan $keluhan)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
 
        $keluhan->update($request->all());
 
        return redirect()->route('keluhans.index')
                        ->with('success','keluhan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(keluhan $keluhan)
    {
        $keluhan->delete();
 
        return redirect()->route('keluhans.index')
                        ->with('success','keluhan berhasil dihapus');
    }
}
