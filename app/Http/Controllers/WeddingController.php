<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        return view('wedding.index');
    }

    public function invitation(Request $request, Customer $customer)
    {
        return view('invitation', [
            'customer' => $customer
        ]);
    }
}
