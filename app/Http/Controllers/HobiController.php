<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        $hobis = Hobi::all();
        return view('hobi.index', compact('hobis'));
    }

    public function create()
    {
        return view('hobi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hobi' => 'required',
        ]);

        Hobi::create($request->all());
        return redirect()->route('hobi.index')->with('success', 'Data hobi berhasil ditambahkan!');
    }

    public function edit(Hobi $hobi )
    {
        return view('hobi.edit', compact('hobi'));
    }

    public function update(Request $request, Hobi $hobi)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $hobi->update($request->all());
        return redirect()->route('hobi.index')->with('success', 'Data hobi berhasil diperbarui!');
    }

    public function destroy(Hobi $hobi)
    {
        $hobi->delete();
        return redirect()->route('hobi.index')->with('success', 'Data hobi berhasil dihapus!');
    }
}