<?php

namespace App\Http\Controllers;

use App\Exports\BarangExport;
use App\Exports\RuanganExport;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function laporanBarang(){
        $data_barang = \App\Barang::all();

        return view('laporan.laporan-barang', ['data_barang' => $data_barang]);
    }

    public function barangPDF(){
        $data_barang = \App\Barang::all();

        $pdf = PDF::loadView('export.barang-view', ['data_barang' => $data_barang]);

        return $pdf->download('barang.pdf');
    }

    public function barangExcel()
    {
        return Excel::download(new BarangExport, 'barang.csv');
    }

    public function laporanRuangan()
    {
        $data_ruangan = \App\Ruangan::all();
        return view('laporan.laporan-ruangan', ['data_ruangan' => $data_ruangan]);
    }

    public function ruanganPDF(){
        $data_ruangan = \App\Ruangan::all();

        $pdf = PDF::loadView('export.ruangan-view', ['data_ruangan' => $data_ruangan]);

        return $pdf->download('ruangan.pdf');
    }

    public function ruanganExcel()
    {
        return Excel::download(new RuanganExport, 'ruangan.csv');
    }
}
