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
        $uploads = Upload::all();
        return view('upload.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $user = User::find(2);
        return view('upload.create', compact('user'));
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
       $namaFile = time()."-".str_replace(' ', '-', $request->filename->getClientOriginalName());

       //dump($validateData);

       //buat folder per user
       $foldeUser = User::find(2)->name;
       $request->filename->move($foldeUser, $namaFile);

    //    $upload = new Upload;
    //    $upload->judul_arsip = $validateData['judul_arsip'];
    //    $upload->jenis_arsip = $validateData['jenis_arsip'];
    //    $upload->no_berkas = $validateData['no_berkas'];
    //    $upload->pencipta_arsip = $validateData['pencipta_arsip'];
    //    $upload->tahun = $validateData['tahun'];
    //    $upload->user_id = $validateData['user_id'];
    //    $upload->filename = $namaFile;
    //    $upload->save();
       $validateData['filename'] = $namaFile;

       Upload::create($validateData);

       return "Berhasil Disimpan";
       
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
    public function edit($id)
    {   
        $upload = Upload::find($id);
        return view('upload.edit', compact('upload'));
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
        
        dump($request->all());
        dump($upload);
        $data = Upload::find($upload->id);
        $folder = $data->user->name;
        dump($folder);
        
        if ($request->hasFile('filename')) {
            
        }else{
            $namafile = $upload->filename;
        } 
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
