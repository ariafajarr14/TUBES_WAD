<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Form;
use App\Models\Dokter;
use Illuminate\Foundation\Validation\ValidatesRequests;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    

    public function clientform()
    {
        //
        $forms = Client::all();
        return view('/layouts/client_form', compact('forms'));
    }

    public function clientfeedback()
    {
        //
        $forms = Client::all();
        return view('/layouts/client_feedback', compact('forms'));
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
            'namaClient' => 'required', 
            'keluhan' => 'required', 
            'lama' => 'required', 
            'riwayat' => 'required', 
        ]);

        $forms = new Form();
        $forms->namaClient = $request->input('namaClient');
        $forms->keluhan = $request->input('keluhan');
        $forms->lama = $request->input('lama');
        $forms->riwayat = $request->input('riwayat');
        $forms->save();
        return redirect('/layouts/client_form');
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
        //
    }
}
