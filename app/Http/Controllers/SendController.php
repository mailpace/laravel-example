<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\MailPace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class SendController extends Controller
{
    /**
     * Send an email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        Mail::mailer('ohmysmtp')->to("l5xfuhyt3bretyip@ethereal.email")->send(new MailPace);
    }
}