<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
  public function index()
  {
    QrCode::email($to = 'ricardogama234@gmail.com', $subject= 'Mensaje', $body='el email');//Fills in the to address
  QrCode::email('ricardogama234@gmail.com');//Fills in the to address, subject, and body of an e-mail.
  QrCode::email('ricardogama234@gmail.com', 'This is the subject.', 'This is the message body.');//Fills in just the subject and body of an e-mail.
  QrCode::email(null, 'This is the subject.', 'This is the message body.');
    
  return view('qrcode');
  }

    
}
