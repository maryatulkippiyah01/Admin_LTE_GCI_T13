<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cast.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
            'foto' => $request->foto,
        ]);
        return redirect()->route('cast-index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cast = DB::table('cast')->where('id', $id)->get();
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cast = DB::table('cast')->where('id',$id)->get();
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ]);

        return redirect()->route('cast-index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect()->route('cast-index')->with('success', 'Data berhasil dihapus!');
    }
}

