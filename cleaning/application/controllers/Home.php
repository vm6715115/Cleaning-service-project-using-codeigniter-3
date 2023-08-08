<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->model('AdminModel','image');
		
		$data1 = $this->image->get_testimonial_image_data();
		$data2 = $this->image->get_team_image_data();
		
		$this->load->view('common/header');
		$this->load->view('website/index',['data1'=>$data1 ,'data2'=>$data2] );
		$this->load->view('common/footer');
		
	}
	public function about()
	{
		
		$this->load->model('AdminModel','image');

         $data2 = $this->image->get_team_image_data();
		 $data1 = $this->image->get_testimonial_image_data();

		$this->load->view('common/header');
		
		$this->load->view('website/about',['data1'=>$data1 ,'data2'=>$data2]);
		
		$this->load->view('common/footer');
		
	}
	public function contact()
	{
		
		$this->load->view('common/header');
		
		$this->load->view('website/contact');
		
		$this->load->view('common/footer');
		
	}
	public function history()
	{
		
		$this->load->view('common/header');
		
		$this->load->view('website/history');
		
		$this->load->view('common/footer');
		
	}
	public function service()
	{

		$this->load->model('AdminModel','service');

         $data = $this->service->get_service_data();
		
		$this->load->view('common/header');
		
		$this->load->view('website/service',['data'=>$data]);
		
		$this->load->view('common/footer');
		
	}
	public function team()
	{
		$this->load->model('AdminModel','image');

         $data = $this->image->get_team_image_data();
		
		$this->load->view('common/header');
		
		$this->load->view('website/team',['data'=>$data]);
		
		$this->load->view('common/footer');
		
	}
	public function testimonials()
	{
		$this->load->model('AdminModel','image');

         $data = $this->image->get_testimonial_image_data();

		$this->load->view('common/header');
		
		$this->load->view('website/testimonials',['data'=>$data]);
		
		$this->load->view('common/footer');
		
	}
	public function service_details()
	{
		$service_id = $this->input->post('id');

		$this->load->model('AdminModel','service'); 
		$res = $this->service->get_service_single_data( $service_id );
		
		$this->load->view('common/header');
		
		$this->load->view('website/service_details' , ['data' => $res]);
		
		$this->load->view('common/footer');
		
	}
	public function gallery()
	{

		$this->load->model('AdminModel','image');

		$data = $this->image->get_image_data();
		
		$this->load->view('common/header');
		$this->load->view('website/gallery',['data'=>$data] );
		
		$this->load->view('common/footer');
		
	}



	// =====================================================================================
	// =========================================================================================
	// ========================================================================================
	// Appointment controller


	public function appointment()
	{
		$this->load->model('AdminModel','service');

         $data = $this->service->get_service_data();
		
		$this->load->view('common/header');
		$this->load->view('website/appointment' ,['data'=>$data]);
		
		$this->load->view('common/footer');
		
	}
	public function add_appointment()
	{
                $post = $this->input->post(); 
               
                $post['appointment_id'] = rand(111,999999999);
                
                $this->load->model('AdminModel','appointment');   					
                $res = $this->appointment->insert_appointment($post);  

				$this->session->set_flashdata('msg', 'appointment added successfully !');		

			return redirect('Home/appointment'); 							
		}

		
	
}
?>