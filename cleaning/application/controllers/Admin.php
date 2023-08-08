<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $this->load->model('AdminModel','appointment');

                $data = $this->appointment->get_appointment_data();

		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/dashboard',['data'=>$data]);
		$this->load->view('admin/common/footer');
	}

        

        // Gallery controller 
        // ======================================================================
        // =========================================================================


	public function gallery_master()
	{
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_image_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                $this->load->view('admin/gallery_master',['data'=>$data] );
                
		$this->load->view('admin/common/footer');
	}

        public function add_image()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $config =[
                        'upload_path' => './assets/admin/uploads/gallery',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_name'))
                {
                        $post = $this->input->post(); 
                       
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/gallery/" . $data ['file_name'];
                        $post['image_name'] = $image_path;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_image($post);  
                }

		$this->session->set_flashdata('msg', 'image added successfully !');		

			return redirect('Admin/gallery_master'); 							
		}
        
                public function delete_image()
		{
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_image_model( $image_id );
                unlink($old_img);


                $this->session->set_flashdata('msg', 'image deleted successfully !');		

			return redirect('Admin/gallery_master'); 

        	}
                public function edit_image()
        	{
                        if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                        $image_id = $this->input->post('id');

                        $image_data = $this->input->post('image_name');
                        $this->load->model('AdminModel','image'); 
                        $res = $this->image->get_image_single_data( $image_id );
                        
                        $this->load->view('admin/common/header' );
                        $this->load->view('admin/common/sidebar');
                        $this->load->view('admin/update_gallery_image' , ['data' => $res] );
                        $this->load->view('admin/common/footer' );
                        
                        
        	}
                public function update_image()
                {
                        if(!$this->session->userdata('id'))
                        {
                                return redirect('Login');
                        }
                        
                        $post = $this->input->post();
                        $image_id = $post['id'];  
                        $old_img = $post['image_name'];

                        $config =[
                                'upload_path' => './assets/admin/uploads/gallery',
                                'allowed_types' => 'jpg|png|gif|jpeg'
                        ];

                        $this->load->library('upload',$config);
                        $data = $this->upload->do_upload('image_name');
                        $data = $this->upload->data();

                        if($data['raw_name'] == ''){

                        }else{
                                $post['image_name'] = "assets/admin/uploads/gallery/".$data['file_name'];
                                unlink($old_img);
                        }
                        
                        
                        unset($post['id']);
                       
                        $this->load->model('AdminModel','image');
                        $res = $this->image->update_image($image_id , $post);  
                        
                        $this->session->set_flashdata('msg', 'image updated successfully !');		
                        
                        return redirect('Admin/gallery_master');
                        
                }



                // team controller
                // =====================================================
                // ===============================================

                public function team_master()
	        {
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_team_image_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                $this->load->view('admin/team_master',['data'=>$data] );
		$this->load->view('admin/common/footer');
	        }


                public function add_team_image()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $config =[
                        'upload_path' => './assets/admin/uploads/team',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_name'))
                {
                        $post = $this->input->post(); 
                       
                        $post['team_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/team/" . $data ['file_name'];
                        $post['image_name'] = $image_path;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_team_image($post);  
                }

                $this->session->set_flashdata('msg', 'team added successfully !');		

			return redirect('Admin/team_master'); 							
		}
        
                public function delete_team_image()
		{
                $team_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_team_image_model( $team_id );

                unlink($old_img);

                $this->session->set_flashdata('msg', 'team deleted successfully !');		

			return redirect('Admin/team_master'); 

        	}
                public function edit_team_image()
        	{
                        if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                        $team_id = $this->input->post('id');

                        $image_data = $this->input->post('image_name');
                        $this->load->model('AdminModel','image'); 
                        $res = $this->image->get_team_image_single_data( $team_id );
                        
                        $this->load->view('admin/common/header' );
                        $this->load->view('admin/common/sidebar');
                        $this->load->view('admin/update_team_image' , ['data' => $res] );
                        $this->load->view('admin/common/footer' );
                        
                        
        	}
                public function update_team_image()
                {
                        if(!$this->session->userdata('id'))
                        {
                                return redirect('Login');
                        }
                        
                        $post = $this->input->post();
                        
                        $team_id = $post['id']; 
                        
                        $old_img = $post['image_name'];

                        $config =[
                                'upload_path' => './assets/admin/uploads/team',
                                'allowed_types' => 'jpg|png|gif|jpeg'
                        ];

                        $this->load->library('upload',$config);
                        $data = $this->upload->do_upload('image_name');
                        $data = $this->upload->data();

                        if($data['raw_name'] == ''){

                        }else{
                                $post['image_name'] = "assets/admin/uploads/team/".$data['file_name'];
                                unlink($old_img);
                        }
                        unset($post['id']);
                        $this->load->model('AdminModel','image');
                        $res = $this->image->update_team_image($team_id , $post);  
                        
                        $this->session->set_flashdata('msg', 'team updated successfully !');		
                        
                        return redirect('Admin/team_master');
                        
                }


                // testimonial controller
                // ==========================================================================
                // =============================================================================



                public function testimonial_master()
	        {
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_testimonial_image_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                $this->load->view('admin/testimonial_master',['data'=>$data] );
		$this->load->view('admin/common/footer');
	        }


                public function add_testimonial_image()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $config =[
                        'upload_path' => './assets/admin/uploads/testimonial',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('t_image_name'))
                {
                        $post = $this->input->post(); 
                       
                        $post['testimonial_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/testimonial/" . $data ['file_name'];
                        $post['t_image_name'] = $image_path;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_testimonial_image($post);  
                }

		$this->session->set_flashdata('msg', 'testimonial added successfully !');		

			return redirect('Admin/testimonial_master'); 							
		}
        
                public function delete_testimonial_image()
		{
                $testimonial_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_testimonial_image_model( $testimonial_id );

                unlink($old_img);

                $this->session->set_flashdata('msg', 'testimonial deleted successfully !');		

			return redirect('Admin/testimonial_master'); 

        	}
                public function edit_testimonial_image()
        	{
                        if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                        $testimonial_id = $this->input->post('id');

                        $image_data = $this->input->post('t_image_name');
                        $this->load->model('AdminModel','image'); 
                        $res = $this->image->get_testimonial_image_single_data( $testimonial_id );
                        
                        $this->load->view('admin/common/header' );
                        $this->load->view('admin/common/sidebar');
                        $this->load->view('admin/update_testimonial_image' , ['data' => $res] );
                        $this->load->view('admin/common/footer' );
                        
                        
        	}
                public function update_testimonial_image()
                {
                        if(!$this->session->userdata('id'))
                        {
                                return redirect('Login');
                        }
                        
                        $post = $this->input->post();
                        
                        $testimonial_id = $post['id'];  

                        $old_img = $post['t_image_name'];

                        $config =[
                                'upload_path' => './assets/admin/uploads/testimonial',
                                'allowed_types' => 'jpg|png|gif|jpeg'
                        ];

                        $this->load->library('upload',$config);
                        $data = $this->upload->do_upload('t_image_name');
                        $data = $this->upload->data();

                        if($data['raw_name'] == ''){

                        }else{
                                $post['t_image_name'] = "assets/admin/uploads/testimonial/".$data['file_name'];
                                unlink($old_img);
                        }
                        unset($post['id']);
                        $this->load->model('AdminModel','image');
                        $res = $this->image->update_testimonial_image($testimonial_id , $post);  
                        
                        $this->session->set_flashdata('msg', 'testimonial updated successfully !');		
                        
                        return redirect('Admin/testimonial_master');
                        
                }




                // service master controller
                // ===================================================================================
                // ===================================================================================
         


                public function service_master()
	        {
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }

                $this->load->model('AdminModel','service');

                $data = $this->service->get_service_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                
                $this->load->view('admin/service_master',['data'=>$data] );
                
		$this->load->view('admin/common/footer');
	}

        public function add_service()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $post = $this->input->post(); 
               
                $post['service_id'] = rand(111,999999999);
                
                $this->load->model('AdminModel','service');   					
                $res = $this->service->insert_service($post);  

		$this->session->set_flashdata('msg', 'service added successfully !');		

			return redirect('Admin/service_master'); 							
		}
        
                public function delete_service()
		{
                $service_id = $this->input->post('id');
                $this->load->model('AdminModel','service'); 
                $res = $this->service->delete_service_model( $service_id );


                $this->session->set_flashdata('msg', 'service deleted successfully !');		

			return redirect('Admin/service_master'); 

        	}
                public function edit_service()
        	{
                        if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                        $service_id = $this->input->post('id');
                        $this->load->model('AdminModel','service'); 
                        $res = $this->service->get_service_single_data( $service_id );
                        
                        $this->load->view('admin/common/header' );
                        $this->load->view('admin/common/sidebar');
                        $this->load->view('admin/update_service_master' , ['data' => $res] );
                        $this->load->view('admin/common/footer' );
                        
                        
        	}
                public function update_service()
                {
                        if(!$this->session->userdata('id'))
                        {
                                return redirect('Login');
                        }
                        
                        $post = $this->input->post();
                        $service_id = $post['id'];  
                        unset($post['id']);
                        $this->load->model('AdminModel','service');
                        $res = $this->service->update_service($service_id , $post);  
                        
                        $this->session->set_flashdata('msg', 'service updated successfully !');		
                        
                        return redirect('Admin/service_master');
                        
                }


                // ======================================================================================
                // ==============================================================================================
                // ==================================================================================================

                // Appointment Adminpannel Controller


                public function appointment()
	        {
		if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }

                $this->load->model('AdminModel','appointment');

                $data = $this->appointment->get_appointment_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                
                $this->load->view('admin/appointment_table' ,['data'=>$data]);
                
                
		$this->load->view('admin/common/footer');
	}
        public function delete_appointment()
        {
                $appointment_id = $this->input->post('id');
                $this->load->model('AdminModel','appointment'); 
                $res = $this->appointment->delete_appointment_model( $appointment_id );


        $this->session->set_flashdata('msg', 'appointment deleted successfully !');		

                return redirect('Admin/appointment'); 

        }


        public function view_single_booking()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $appointment_id = $this->input->post('id');
                $this->load->model('AdminModel','appointment'); 
                $res = $this->appointment->get_appointment_single_data( $appointment_id );
                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/view_single_booking' , ['data' => $res] );
                $this->load->view('admin/common/footer' );   
        }



        // ==========================================================================
        // ========================================================================
        // contact



        public function contact_master()
        {
        if(!$this->session->userdata('id'))
        {
                return redirect('Login');
        }

        $this->load->model('AdminModel','contact');

        $data = $this->contact->get_contact_data();


        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        
        $this->load->view('admin/contact_master',['data'=>$data] );
        
        $this->load->view('admin/common/footer');
        }

        public function add_contact()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('Login');
                }
                $post = $this->input->post(); 
               
                $post['contact_id'] = rand(111,999999999);
                
                $this->load->model('AdminModel','contact');   					
                $res = $this->contact->insert_contact($post);  

		$this->session->set_flashdata('msg', 'contact added successfully !');		

			return redirect('Home/contact'); 							
		}
        
                public function delete_contact()
		{
                $contact_id = $this->input->post('id');
                $this->load->model('AdminModel','contact'); 
                $res = $this->contact->delete_contact_model( $contact_id );


                $this->session->set_flashdata('msg', 'contact deleted successfully !');		

			return redirect('Admin/contact_master'); 

        	}
               
               


}