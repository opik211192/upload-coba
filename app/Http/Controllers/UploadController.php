<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //jika login
        //$user = auth()->user()->id;

        $user = User::find(2);
        return view('upload.index', compact('user'));
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
       $validateData = $request->validate([
           'judul_arsip' => 'required',
           'jenis_arsip' => 'required',
           'no_berkas' => 'required',
           'pencipta_arsip' => 'required',
           'tahun' => 'required',
           'user_id' => 'required',
           'filename' => 'required',
       ]);

       
       $extFile = $request->filename->getClientOriginalExtension();
       $namaFile = time()."-".$request->filename->getClientOriginalName();

       dump($namaFile);

       //buat folder per user
    //    $foldeUser = User::find(2)->name;
    //    $request->filename->move($foldeUser, $namaFile);

    //    Upload::create($validateData);
       //dump($validateData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
