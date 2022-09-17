<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function get_all_invoices()
    {
        $invoices = Invoice::with('customer')->orderBy('id', 'DESC')->get();
        return response()->json([
            'invoices' => $invoices
        ],200);
    }


    public function search_invoices(Request $request)
    {
        $busqueda = $request->get('s');

        if($busqueda != null){

            $invoice = Invoice::with('customer')
            ->where('id','LIKE',"%$busqueda%")
            ->get();

            return response()->json([
                'invoices' => $invoice
            ], 200);
        }else{
            return $this->get_all_invoices();
        }


    }
}
