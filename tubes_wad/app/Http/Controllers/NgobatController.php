<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ngobat;

class NgobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngobats = Ngobat::latest()->paginate(5);

        return view('layouts.halaman_obat.index_obat',compact('ngobats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.halaman_obat.create_obat');
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
        $request->validate([
            'namaObat' => 'required',
            'jenisObat' => 'required',
            'dosisObat' => 'required',
            'hargaObat' => 'required',
        ]);

        Ngobat::create($request->all());

        return redirect()->route('layouts.halaman_obat.index_obat')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('layouts.halaman_obat.show_obat',compact('ngobat'));
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
        return view('layouts.halaman_obat.edit_obat',compact('ngobat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, id $id )
    {
        //
        $request->validate([
            'namaObat' => 'required',
            'jenisObat' => 'required',
            'dosisObat' => 'required',
            'hargaObat' => 'required',
        ]);

        $ngobat->update($request->all());

        return redirect()->route('layouts.halaman_obat.index_obat')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ngobat $ngobat, id $id)
    {
        //
        $post->delete();

        return redirect()->route('layouts.halaman_obat.index_obat')
                        ->with('success','Post deleted successfully');
    }
}
