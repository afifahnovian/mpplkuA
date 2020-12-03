<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Kirim Email
    public function sendEmail(Request $request)
    {  
        // Siapkan data
        $emailaddress = $request->emailaddress;

        $data =array(
            'namecomplain'=> $request->namecomplain,
            // 'emailcomplain'=> $request->emailcomplain,
            'email_body'=> $request->email_body
        );
        //Kirim Email
        Mail::send('email_template', $data, function($mail) use($emailaddress){
            $mail->to('designfyy@gmail.com')
                    ->subject("Email Pengunjung SIMARSIP FMIPA");
            $mail->from($emailaddress, 'Pengunjung SIMARSIP FMIPA');
        });

        //Cek status 
        if(Mail::failures()){
            return "Gagal Mengirim Pesan";
        }
            return back()->with('success', 'Terimakasih telah menghubungi kami!');
        }
}
