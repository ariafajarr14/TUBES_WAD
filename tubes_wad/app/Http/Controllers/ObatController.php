<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Foundation\Validation\ValidatesRequests;
class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obats = Obat::all();
        return view('/layouts/admin_tambahobat', compact('obats'));
    }
    public function index2()
    {
        //
        $obats = Obat::all();
        return view('/layouts/daftar_obat', compact('obats'));
    }
    public function index3()
    {
        //
        $obats = Obat::all();
        return view('/layouts/admin_editobat', compact('obats'));
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
        $this->validate($request, [
            'id',
            'namaObat' => 'required', 
            'jenisObat' => 'required', 
            'dosisObat' => 'required', 
            'hargaObat' => 'required', 
        ]);

        $obats = new Obat();
        $obats->id = $request->input('id');
        $obats->namaObat = $request->input('namaObat');
        $obats->jenisObat = $request->input('jenisObat');
        $obats->dosisObat = $request->input('dosisObat');
        $obats->hargaObat = $request->input('hargaObat');
        $obats->save();
        return redirect('/layouts/admin_tambahobat')->with('success', 'Data Berhasil Disimpan');
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
        $obats = Obat::find($id);
        return view('/layouts/admin_tambahobat', compact('obats', $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function update(Request $request)
    {
        //
        $obats = Obat::find($request->id);
        $this->validate($request, [
            'id',
            'namaObat' => 'required', 
            'jenisObat' => 'required', 
            'dosisObat' => 'required', 
            'hargaObat' => 'required'
        ]);
        $id;
        $obats = Obat::find($id);
        $obats->namaObat = $request->input('namaObat');
        $obats->jenisObat = $request->input('jenisObat');
        $obats->dosisObat = $request->input('dosisObat');
        $obats->hargaObat = $request->input('hargaObat');
        $obats->save();

        return redirect('/layouts/admin_editobat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function delete(Request $request)
    {
        
    }
    public function destroy($id)
    {
        //
    $obats = Obat::find($id);
    $obats->delete();
    Session::flash('success', 'The post was just trashed.');

    return redirect('/layouts/admin_tambahobat');
        
    }
}
