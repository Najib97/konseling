<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;


class BarangExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function headings():array {
          return [
              'ID Barang',
              'Nama Komoditas',
              'Harga Barang',
              'Stok Barang',
              'Nama Pasar',
              'Bulan',
              'Tahun'
          ];
    }



    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table("data_barang")
  			->join("pasar", function($join)
  			{
  				$join->on("data_barang.id_pasar", "=", "pasar.id_pasar");
  			})
  			->join("data_komoditas", function($join)
  			{
  				$join->on("data_barang.id_komoditas", "=", "data_komoditas.id_komoditas");
  			})
  			->select("id_barang", "nama_komoditas", "harga_barang", "stok_barang", "nama_pasar", "bulan", "tahun")
  			->get();
    }
}
