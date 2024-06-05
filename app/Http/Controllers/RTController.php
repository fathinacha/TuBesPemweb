<?php

namespace App\Http\Controllers;

use App\Models\RT;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        $rts = RT::all();
        return view('rts.index', compact('rts'));
    }

    public function create()
    {
        return view('rts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ketua' => 'required|string|max:255',
        ]);

        RT::create($data);

        return redirect()->route('rts.index')->with('success', 'RT created successfully.');
    }

    public function edit(RT $rt)
    {
        return view('rts.edit', compact('rt'));
    }

    public function update(Request $request, RT $rt)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ketua' => 'required|string|max:255',
        ]);

        $rt->update($data);

        return redirect()->route('rts.index')->with('success', 'RT updated successfully.');
    }

    public function destroy(RT $rt)
    {
        $rt->delete();
        return redirect()->route('rts.index')->with('success', 'RT deleted successfully.');
    }
}
