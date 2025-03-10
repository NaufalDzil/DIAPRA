<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\Kadis;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(SuratMasuk $suratmasuk)
    {
        $disposisi = Disposisi::where('no', $suratmasuk->nomor_surat)->get();
    
        return view('disposisi.index', compact('suratmasuk', 'disposisi'));
    }

    public function cetak(SuratMasuk $suratmasuk)
    {
        $kadis = Kadis::find(1);
        return view('disposisi.disposisi', compact('suratmasuk', 'kadis'));
    }

    public function create(SuratMasuk $suratmasuk)
    {       
        $disposisi = Disposisi::where('no', $suratmasuk->nomor_surat)->get();

        return view('disposisi.create', compact('suratmasuk', 'disposisi'));
    }

    public function store(Request $request, SuratMasuk $suratmasuk)
    {
        $request->validate([
            'no' => 'required',
            'tujuan' => 'required',
            'disposisi' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $data = $request->all();
        $data['no'] = $suratmasuk->nomor_surat;

        if ($request->hasFile('disposisi')) {
            $file = $request->file('disposisi');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['disposisi'] = $fileName;
        }        

        Disposisi::create($data);

        return redirect()->route('disposisi.index', ['suratmasuk' => $suratmasuk->id])
                     ->with('success', 'Disposisi berhasil diunggah.');
    }

    public function edit(SuratMasuk $suratmasuk, Disposisi $disposisi)
    {
        return view('disposisi.edit', compact('suratmasuk', 'disposisi'));
    }

    public function update(SuratMasuk $suratmasuk, Disposisi $disposisi, Request $request)
    {
        // Validasi input
        $request->validate([
            'tujuan' => 'required|string|max:255', // Pastikan tujuan adalah string dan tidak lebih dari 255 karakter
            'disposisi' => 'nullable|file|mimes:pdf|max:10240' // Validasi file
        ]);
    
        // Update atribut tujuan
        $disposisi->tujuan = $request->input('tujuan');
    
        // Cek jika ada file yang diupload
        if ($request->hasFile('disposisi')) {
            $file = $request->file('disposisi');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            
            // Simpan file ke direktori yang ditentukan
            $file->storeAs('public/pdf', $fileName);
            
            // Update nama file pada model
            $disposisi->disposisi = $fileName;
        }
    
        // Simpan model disposisi
        $disposisi->save();
        
        // Redirect dengan pesan sukses
        return redirect()->route('disposisi.index', $suratmasuk->id)
                         ->with('success', 'Disposisi berhasil diperbarui.');
    }

    public function surat(SuratMasuk $suratmasuk, Disposisi $disposisi)
    {
        return view('disposisi.surat', compact('suratmasuk', 'disposisi'));
    }
}
