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

    public function parent()
    {
        $wishes = Wish::all();
        return view('parent', [
            'wishes' => $wishes
        ]);
    }

    public function brideInvitation(Request $request)
    {
        $wishes = Wish::all();
        return view('bride-invitation', [
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

    public function confirm(Request $request, Customer $customer)
    {
        return view('attending', [
            'customer' => $customer
        ]);
    }

    public function attendingResponse(Request $request, Customer $customer)
    {
        $customer->response = $request->confirm;
        $customer->save();
        return view('attending', [
            'customer' => $customer
        ]);
    }
}
