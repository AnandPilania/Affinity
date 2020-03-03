<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
   
   function __construct()
   {
   	        parent::__construct();
   	        $this->load->model('Adminmodel');
   }
  
public function index()
{
	
 if($this->session->userdata('email'))
   {

  return redirect('Admincontroller/index');
    
    }

 else
 {
	$this->load->view('login');
 }
	}
 public function checklogin()
 {
      
    $email=$this->input->post('email');
    $password=$this->input->post('password');
         
    $check=$this->Adminmodel->checklogin($email,$password); 

    if($check>0)
     {
    	  $this->session->set_userdata('email',$email);
    	    return redirect('Admincontroller/index');
     }
    else
     {
     	$this->session->set_flashdata('wrong_user_passs',"Wrong User Name And Password");
        return redirect('Welcome/index');   
     }
      

        
	}

  public function logout()
  {
    session_destroy();
    return redirect('Welcome/index');   
  }


}
