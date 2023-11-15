<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class InvoiceController extends Controller
{
    public function generatePDF()
    {
        $path = public_path().'/storage/assets/images/logo_mbkm.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/'.$type.';base64,'.base64_encode($data);
        
        $pdf = Pdf::loadView('member.invoice.invoice', compact('image'));
        return $pdf->download('invoice.pdf');

        // return view('member.invoice.invoice');
    }


}

// $path = public_path().'/storage/assets/images/logo_mbkm.png';
// $type = pathinfo($path, PATHINFO_EXTENSION);
// $data = file_get_contents($path);
// $image = 'data:image/'.$type.';base64,'.base64_encode($data);