<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function show()
    {
        // Generate QR code for the current URL
        //return response(QrCode::generate(url('/')));

        return view('/qrcode');

    }
}
