<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use Illuminate\Http\Request;
use App\Mail\SendBookingEmail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    function sendingEmail(Request $request)
    {
        $dataForm = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'paket' => 'required',
            'jam' => 'required',
            'tanggal_keberangkatan' => 'required',
            'peserta_dewasa' => 'integer',
            'peserta_anak' => 'integer',
        ]);

        $nama = $dataForm['nama'];
        $email = $dataForm['email'];
        $tanggal = $dataForm['tanggal_keberangkatan'];
        $paket = $dataForm['paket'];
        $nomor = $dataForm['nomor_telepon'];

        // kirim email ke pemesan
        Mail::to($request['email'])->send(new SendBookingEmail($nama, $email, $tanggal, $paket));

        // kirim email ke innovation travel
        Mail::to('hallavinsen@gmail.com')->send(new BookingConfirmation($nama, $email, $tanggal, $paket, $nomor));

        return redirect()->back()->with('success', 'Pemesanan berhasil!');
    }
}
