<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengunjung = User::WhereNot('id', 1)->get();

        return view ('admin.pengunjung.index', [
            'pengunjung' => $pengunjung,
            'title'      => 'Data Pengunjung'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('users.register', [
            'title' => 'STARS || Registrasi Pengunjung'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePengunjung(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'        => 'required|email',
            'age'          => 'required',
            'gender'       => 'required',
        ], [
            'name.required'     => 'Name is required',
            'email.required'    => 'Email address is required',
            'email.email'       => 'Input must be an email address',
            'age.required'      => 'Age is required',
            'gender.required'   => 'Gender is required',
        ]);

        User::create([
            'name'    =>  $request->name,
            'email'   =>  $request->email,
            'age'     =>  $request->age,
            'gender'  =>  $request->gender
        ]);

        // return view ('users.animation');
        return redirect()->route('animation');
        // return url ('/animation')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengunjung = User::find($id);
        return view ('admin.pengunjung.form', [
            'pengunjung'   =>  $pengunjung,
            'title'    => 'Edit Data Pengunjung'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'    =>  $request->name,
            'email'   =>  $request->email,
            'age'     =>  $request->age,
            'gender'  =>  $request->gender
        ];

        User::where('id', $id)->update($data);

        return redirect()->route('pengunjung.index')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
