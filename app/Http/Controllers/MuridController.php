<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murids = Murid::all();
        $tampil = "sma 2 bukit asam";

        return view('sekolah.murid.index',compact("murids","tampil"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.murid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Murid::create($request->all());
        return redirect()->back();
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
        $murid = Murid::find($id);

    return view('sekolah.murid.edit',compact('murid'));
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
        Murid::where('id',$id)->update([
            "nama_siswa" => $request->nama_siswa,
            "kelamin" => $request->kelamin,
            "tempat_lahir" => $request->tempat_lahir,
            "alamat" => $request->alamat,
            "nohp" => $request->nohp,
            "tahun_masuk" => $request->tahun_masuk,
            "kelas" => $request->kelas
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Murid::find($id)->delete();

        return redirect()->back();
    }
}
