<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CodeDesckEmailSender extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name, $last_name, $customer_mobile, $email, $company_name, $webURL, $strategic_and_planning, $branding_and_creative_design, $coding_and_technology_integration, $digital_marketing, $marketing_budget, $note;

    public function __construct($first_name, $last_name, $customer_mobile, $email, $company_name, $webURL, $strategic_and_planning, $branding_and_creative_design, $coding_and_technology_integration, $digital_marketing, $marketing_budget, $note)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->customer_mobile = $customer_mobile;
        $this->email = $email;
        $this->company_name = $company_name;
        $this->webURL = $webURL;
        $this->strategic_and_planning = $strategic_and_planning;
        $this->branding_and_creative_design = $branding_and_creative_design;
        $this->coding_and_technology_integration = $coding_and_technology_integration;
        $this->digital_marketing = $digital_marketing;
        $this->marketing_budget = $marketing_budget;
        $this->note = $note;


    }
    public function build()
    {
        $first_name = $this->first_name;
        $last_name = $this->last_name;
        $customer_mobile = $this->customer_mobile;
        $email = $this->email;
        $company_name = $this->company_name;
        $webURL = $this->webURL;
        $strategic_and_planning = $this->strategic_and_planning;
        $branding_and_creative_design = $this->branding_and_creative_design;
        $coding_and_technology_integration = $this->coding_and_technology_integration;
        $digital_marketing = $this->digital_marketing;
        $marketing_budget = $this->marketing_budget;
        $note = $this->note;

        return $this->view('email.code_desck_email_sender', compact('first_name', 'last_name', 'customer_mobile', 'email', 'company_name', 'webURL', 'strategic_and_planning', 'branding_and_creative_design', 'coding_and_technology_integration', 'digital_marketing', 'marketing_budget', 'note'));
    }
}
