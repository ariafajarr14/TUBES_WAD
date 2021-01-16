<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Dokter;
use App\Models\Client;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DokterController extends Controller
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

    public function indexreplydokter()
    {
        //
        $forms = Form::all();
        return view('/layouts/dokter_repfeedback', compact('forms'));
    }

    public function dokterfeedback()
    {
        //
        $formfeedbacks = Dokter::all();
        return view('/layouts/client_feedback', compact('formfeedbacks'));
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
            'namaDokter' => 'required', 
            'pesan' => 'required', 
            'saranObat' => 'required', 
            'periksaLanjut' => 'required', 
        ]);

        $formfeedbacks = new Dokter();
        $formfeedbacks->namaDokter = $request->input('namaDokter');
        $formfeedbacks->pesan = $request->input('pesan');
        $formfeedbacks->saranObat = $request->input('saranObat');
        $formfeedbacks->periksaLanjut = $request->input('periksaLanjut');
        $formfeedbacks->save();
        return redirect('/layouts/dokter_repfeedback');
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
