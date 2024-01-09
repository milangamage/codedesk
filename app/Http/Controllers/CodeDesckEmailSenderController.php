<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Mail;
use App\Mail\CodeDesckEmailSender;
use Illuminate\Support\Facades\Mail;

class CodeDesckEmailSenderController extends Controller
{

    public function sendEmail(Request $request)
    {
        Mail::send('email.code_desck_email_sender', ['first_name' => $request->first_name, 'last_name' => $request->last_name, 'customer_mobile' => $request->customer_mobile, 'email' => $request->email, 'company_name' => $request->company_name, 'webURL' => $request->webURL, 'strategic_and_planning' => $request->strategic_and_planning, 'branding_and_creative_design' => $request->branding_and_creative_design, 'coding_and_technology_integration' => $request->coding_and_technology_integration, 'digital_marketing' => $request->digital_marketing, 'marketing_budget' => $request->marketing_budget, 'note' => $request->note], function ($message) use ($request) {
            $message->to('ishan.themedfuture@gmail.com');
            $message->from('contact@thecodedesk.com');
            $message->subject('Code Desk Contact Email');
        });
    }

}


