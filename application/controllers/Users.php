<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class Users extends CI_Controller{
		function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_users');
		}
		
		public function index()
		{
			$data=array();
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('login',$data);
		}
		
		
		/*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            //$data['user'] = $this->model_users->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
           //$this->load->view('users/account', $data);
			redirect(base_url('dashboard'));
        }else{
            redirect('users/login');
        }
    }
		
		/*
     * User Login
     */
	 
	 public function login()
	 {
			$this->form_validation->set_rules('username', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                 $data = array(
                    'username'=>$this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                ); 
				/* 
				$userName=$this->input->post('username');
				$password=$this->input->post('password'); 
				*/
                $checkLogin = $this->model_users->getRows($data);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('users/account/');
                }
				else
				{
					$this->session->set_flashdata('error','Wrong email or password, please try again.');
                    //$data['error_msg'] = 'Wrong email or password, please try again.';
                }
	 }
	 
	 $this->index();
	 
	 }
	 
	 
	public function logout()
	{
	$this->session->unset_userdata('isUserLoggedIn');
	$this->session->unset_userdata('userId');
	$this->session->sess_destroy();
	redirect('users/login/');
    }
	 
		
	
		 /*
     * User registration
     */
    public function registration(){
        $data = array();
        //$userData = array();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('registration',$data);

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'username' => strip_tags($this->input->post('username')),
				'mobile_number' => strip_tags($this->input->post('mobile_number')),
                'password' => md5($this->input->post('password'))  
            );

			
            if($this->form_validation->run() == true){
				
				$email=$this->input->post('username');
				$check_email=$this->model_users->selectUserEmail($email);
				if($check_email==true)
				{
					
					
					$this->session->set_flashdata('success','Given email already exists!!!');
					redirect(base_url('users/registration'));
				}

                $insert = $this->model_users->insert_user($userData);
                if($insert == true) {
				
				$this->session->set_flashdata('success','User Succesfully created');
				redirect(base_url('users/registration'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','User not created');
				redirect(base_url('users/registration'));
        	}
            }
       

        
    }
	
	
	
	/*
     * Existing email check during validation
     */
   /*  public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->model_users->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    } */
    
		
	
}