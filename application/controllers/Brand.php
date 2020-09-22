<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if(!($this->session->userdata('isUserLoggedIn'))){
			redirect('users/login');
		}
        
		}

	public function index()
	{
		$data=array();
		$this->load->model('model_brands');
		$data['brandlist']=$this->model_brands->fetchBrandData();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('brand-list');
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->model('model_brands');

		$response = array();

		$this->form_validation->set_rules('brand_name', 'Brand_name', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'brand_name' => $this->input->post('brand_name'),
        		'status' => $this->input->post('status'),	
        	);

        	$create = $this->model_brands->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','brand Succesfully created');
				redirect(base_url('brand'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','brand not created');
				redirect(base_url('brand'));
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}
	
	public function view($id)
	{
		$data=array();
		$this->load->model('model_brands');
		$data['brandById']=$this->model_brands->fetchBrandDataById($id);
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit-brand',$data);
		$this->load->view('templates/footer');
	}
	
	public function update($id)
	{
		
		if($id) {
			$this->form_validation->set_rules('brand_name', 'Brand name', 'trim|required');
			$this->form_validation->set_rules('status', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'brand_name' => $this->input->post('brand_name'),
	        		'status' => $this->input->post('status'),	
	        	);

	        	$this->load->model('model_brands');
				$update=$this->model_brands->updateBrandDataById($data,$id);
				if($update)
				{
					$this->session->set_flashdata('success','brand Succesfully updated');
					redirect(base_url('brand'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','brand not updated');
					redirect(base_url('brand'));
				}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		}
		
		
		public function delete($id)
		{
			$this->load->model('model_brands');
			$delete=$this->model_brands->deleteBrandDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','brand Succesfully deleted');
				redirect(base_url('brand'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','brand not deleted');
				redirect(base_url('brand'));
			}
			
		}
	
}
