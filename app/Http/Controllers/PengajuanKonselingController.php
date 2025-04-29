<?php

namespace App\Http\Controllers;

use App\Models\PengajuanKonseling;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PengajuanKonselingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.layanan.pengajuan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:12',
            'usia' => 'required|integer|min:0',
            'jurusan' => 'required|string',
            'prodi' => 'required|string',
            'semester' => 'required|integer|min:0',
            'no_telp' => 'required|string',
            'deskripsi_masalah' => 'required|string',
            'sejak_kapan' => 'required|string',
            'tindakan_yang_dilakukan' => 'required|string',
            'tanggal' => 'required|date',
            'sesi' => 'required|string',
            'jenis_layanan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'kategori_masalah' => 'required|string',

            // tambahkan validasi sesuai field lainnya
        ]);


        $pengajuan = PengajuanKonseling::create($validated);

        return redirect()->route('pengajuan-konseling.show', $pengajuan->kode_konseling)
                         ->with('success', 'Pengajuan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode_konseling)
    {
        $pengajuan = PengajuanKonseling::where('kode_konseling', $kode_konseling)->firstOrFail();
        return view('page.layanan.resultpengajuan', compact('pengajuan'));
    }

    public function exportPdf(string $id)
    {
        $data = PengajuanKonseling::findOrFail($id); // lebih aman pakai findOrFail
        $pdf = Pdf::loadView('pdf.laporanawal', ['data' => $data]); // perbaiki passing data
        return $pdf->download('pengajuan-konseling-' . $data->id . '.pdf');
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
