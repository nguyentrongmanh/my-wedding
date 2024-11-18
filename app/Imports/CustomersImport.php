<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return Customer::create(
            [
                'name' => $row['name'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'nickname' => $row['nickname'],
                'address' => $row['address'],
                'response' => $row['response']
            ]
        );
    }
}
