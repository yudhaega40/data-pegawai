<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();

        return view('home', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'no_pegawai' => ['required', 'string', 'max:20', 'unique:' . Pegawai::class],
            'nama' => ['required', 'string', 'max:255'],
            'mulai_kerja' => ['required'],
            'divisi' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required'],
            'tanggal_lahir' => ['required'],
            'agama' => ['required'],
            'status_kawin' => ['required'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255'],
        ],
        [
            'no_pegawai.unique' => 'Nomor Pegawai sudah terdaftar',
        ]);

        if($validator->fails()){
            session()->flash('error_add', $validator->errors());
            return redirect(route('add'));
        }

        $pegawai = Pegawai::create($input);

        if ($pegawai) {
            session()->flash('pegawai_success', 'Pegawai ' . $request->nama . ' Berhasil Disimpan!');
        }

        return redirect(route('home'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
