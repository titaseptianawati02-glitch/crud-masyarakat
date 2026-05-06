<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function index()
    {
        $data = Masyarakat::all();
        return view('masyarakat.index', compact('data'));
    }

    public function create()
    {
        return view('masyarakat.tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nomor_kk' => 'required|digits:16',
            'nomor_ktp' => 'required|digits:16|unique:masyarakat,nomor_ktp',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);

        Masyarakat::create($validated);

        return redirect('/masyarakat')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('masyarakat.edit', compact('masyarakat'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nomor_kk' => 'required|digits:16',
            'nomor_ktp' => 'required|digits:16|unique:masyarakat,nomor_ktp,' . $id,
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);

        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->update($validated);

        return redirect('/masyarakat')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->delete();

        return redirect('/masyarakat')->with('success', 'Data berhasil dihapus');
    }
}