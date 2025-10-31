<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Hobi;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::latest()->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::all();
        return view('transaksi.create', compact('pelanggan', 'transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_transaksi' => 'required|unique:transaksis',
            'tanggal' => 'required',
            'pelanggan_id' => 'required|exist:pelanggans,id',
            'total_harga' => 'required',
        ]);
        $transaksi = new Transaksi();
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->total_harga = $request->totaol_harga;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_transaksi' => 'required|unique:transaksis,kode_transaksi,' . $id,
            'tanggal' => 'required',
            'pelanggan_id' => 'required|exist:pelanggans,id',
            'total_harga' => 'required',
            
        ]);

         $transaksi = new Transaksi();
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->total_harga = $request->totaol_harga;
        $transaksi->save();
       
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        
        return redirect()->route('transaksi.index');
    }
}
