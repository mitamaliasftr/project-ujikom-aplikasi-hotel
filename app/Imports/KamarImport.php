<?php

namespace App\Imports;

use App\Models\Kamar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KamarImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row)
        return new Kamar([
            'tipe_kamar' => $row['tipe_kamar']
        ]);
    }

    public function headingRow(): int
    {
        return 3;
    }
}
