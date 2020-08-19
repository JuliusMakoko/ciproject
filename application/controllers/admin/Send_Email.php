<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

defined('BASEPATH') OR exit('No direct script access allowed');
Class Send_Email extends CI_Controller {


public function index(){
$this->form_validation->set_rules('sender','Sender','required');
$this->form_validation->set_rules('recipient','Recipient','required');
$this->form_validation->set_rules('subject','Subject','required');
$this->form_validation->set_rules('message','Message','required');
if($this->form_validation->run()){
    
$sender=$this->input->post('sender');
$recipient=$this->input->post('recipient');	
$subject=$this->input->post('subject');
$message=$this->input->post('message');	
//static
$email_type = 'Default';
$body_type = 'text';
$html='';
    
    // First, instantiate the SDK with your API credentials
$mgClient = Mailgun::create('API-Key'); // For US servers
//$mgClient = Mailgun::create('07e45e2a-09b9462d', 'https://api.eu.mailgun.net'); // For EU servers
$domain = "mailgun@<domain>";
// Now, compose and send your message.
// $mg->messages()->send($domain, $params);
$params  = array(
     'from'    => "$sender <mailgun@<>",
     'to'      => $recipient,
     'subject' => $subject,
     'text'    => $message
);
   $result =  $mgClient->messages()->send($domain,$params);

    

    
  
echo "<script>alert('Email Sent Successfully.. !!');</script>";
    
    
    
    
} else {
$this->load->view('admin/send_email');
}	
}

//function for logout
public function logout(){
$this->session->unset_userdata('adid');
$this->session->sess_destroy();
return redirect('admin/send_email');
}

}