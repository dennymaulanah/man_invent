<?php

namespace App\Exports;

use App\Ruangan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

// class BarangExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Barang::all();
//     }

// }

class RuanganExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.ruangan-view', [
            'data_ruangan'=> Ruangan::all()
        ]);
    }

}