<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Wish;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        $wishes = Wish::all();
        return view('wedding', [
            'wishes' => $wishes
        ]);
    }

    public function invitation(Request $request, Customer $customer)
    {
        $wishes = Wish::orderBy('created_at', 'desc')->get();
        return view('invitation', [
            'customer' => $customer,
            'wishes' => $wishes
        ]);
    }
}
