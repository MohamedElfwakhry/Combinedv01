<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProductSize([
            //

            'size' => $row[0],
            'type' => 'fitting'
        ]);
    }

    public function collection(Collection $rows)
    {
        // TODO: Implement collection() method.
        foreach ($rows as $row)
        {
            ProductSize::create([
                'size' => $row[0],
                'type' => 'fitting'
                // add the other columns
            ]);
        }
    }
}
