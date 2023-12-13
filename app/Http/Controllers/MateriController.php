<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();

        return view ('admin.materi.index', [
            'materi' => $materi,
            'title'  => 'Data Materi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.materi.tambah', [
            'title' => 'Tambah Data Materi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Materi::create([
            'title' => $request->title,
            'link'  => $request->link
        ]);

        return redirect()->route('materi.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        $materi = Materi::find($id);
        return view ('admin.materi.edit', [
            'materi'=> $materi,
            'title' => 'Edit Data Materi'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        $data = [
            'title'  =>  $request->title,
            'link'   =>  $request->link
        ];

        Materi::where('id', $id)->update($data);

        return redirect()->route('materi.index')->with('success', 'Data Berhasil Diedit');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        $materi = Materi::find($id);

        $materi->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }
}
