<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $fasilitas = Fasilitas::all();
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama_fasilitas' => 'required|',
            'foto' => 'required|',
            'keterangan' => 'required|'
        ]);
        $fasilitas = new Fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->foto = $request->foto;
        $fasilitas->keterangan = $request->keterangan;
       if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $fasilitas->foto= $filename;
        }
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit',compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama_fasilitas' => 'required|',
            'foto' => 'required|',
            'keterangan' => 'required|'
        ]);
        $fasilitas = new Fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->foto = $request->foto;
        $fasilitas->keterangan = $request->keterangan;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $fasilitas->foto= $filename;
        }
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');
    }
}
