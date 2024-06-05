<?php

// app/Http/Controllers/WargaController.php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\RT;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = Warga::with('rt')->get();
        return view('wargas.index', compact('wargas'));
    }

    public function create()
    {
        $rts = RT::all();
        return view('wargas.create', compact('rts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'nullable|string',
            'email' => 'nullable|email',
            'id_rt' => 'required|exists:rts,id',
        ]);

        Warga::create($request->all());
        return redirect()->route('wargas.index');
    }

    public function edit(Warga $warga)
    {
        $rts = RT::all();
        return view('wargas.edit', compact('warga', 'rts'));
    }

    public function update(Request $request, Warga $warga)
    {
        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'id_rt' => 'required|exists:rts,id'
        ]);

        // Update data warga dengan data yang valid
        $warga->update($validatedData);

        // Redirect kembali ke halaman index warga dengan pesan sukses
        return redirect()->route('wargas.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy(Warga $warga)
    {
        $warga->delete();
        return redirect()->route('wargas.index');
    }
}