<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	
// LOAD LOGIN  PAGE CONTROLLER

	public function index()
	{
        
        $this->load->view('admin/login' ); 											// FOR VIEW LOGIN PAGE IN BROWSER
       
	}

           // CHECK LOGIN CONTROLLER

	public function check_login()
	{
		$email = $this->input->post('email');  													// FOR LOGIN PAGE INPUT EMAIL
		$password = $this->input->post('password');  											// FOR LOGIN PAGE INPUT EMAIL

		$this->load->model('AdminLoginModel','login'); 													// FOR CALL MODEL
		$array = $this->login->check_user($email,$password); 										// FOR SEND DATA IN MODEL


		if ($array) {
			$id = $array->user_id;
			$name = $array->name;
			$this->session->set_userdata('id',$id);
			$this->session->set_userdata('name',$name);
			return redirect('Admin');   																	// SEND TO HOME PAGE IN LOGIN 
		}
		else
		{
			$this->session->set_flashdata('msg', 'Invalid Email or Password !'); 						// NOT LOGIN MSG 
			return redirect('AdminLogin/index');																 // FOR REDIRECT LOGIN PAGE
		}
	}

    public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->set_flashdata('msg','Logout successfully !');
		return redirect('Home/index'); 
	}
 }
?>

