<?php
include './vendor/autoload.php';
use Twilio\Rest\Client;

defined('BASEPATH') OR exit('No direct script access allowed');
Class Send_Sms extends CI_Controller {


public function index(){
$this->form_validation->set_rules('cellphone','Cellphone','required');
$this->form_validation->set_rules('message','Message','required');
if($this->form_validation->run()){
$cellphone=$this->input->post('cellphone');
$message=$this->input->post('message');	
    //twilio
     $sid = '<sid>';
    $token = '<token>';
    
// A Twilio number you own with SMS capabilities
 $twilio_number = "+twilio_number";

$client = new Client($sid, $token);
$msg = $client->messages->create(
    // Where to send a text message (your cell phone?)
    $_POST['cellphone'],
    array(
        'from' => $twilio_number,
        'body' => $_POST['message']
    )
);
 
    if($msg -> $sid){
        
        echo "Message sent successfully!";
        return redirect('admin/dashboard');
        
    }else{
         echo "Message transmission failed!";
        redirect('admin/send_sms');
    }
    
    
    
} else {
$this->load->view('admin/send_sms');
}	
}

//function for logout
public function logout(){
$this->session->unset_userdata('adid');
$this->session->sess_destroy();
return redirect('admin/send_sms');
}

}