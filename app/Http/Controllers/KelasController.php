<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Guru;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kelas = Kelas::with('Guru')->get();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurus = Guru::all();
         return view('kelas.create',compact('gurus'));
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
            'nama_kelas' => 'required|',
            'guru_id' => 'required|'
        ]);
        $kelas = new Kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->guru_id = $request->guru_id;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $gurus = Guru::all();
        $selectedGuru = Kelas::findOrFail($id)->guru_id;
        return view('kelas.edit',compact('kelas','gurus','selectedGuru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'nama_kelas' => 'required|',
            'guru_id' => 'required|'
        ]);
        $kelas = Kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->guru_id = $request->guru_id;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }
}
