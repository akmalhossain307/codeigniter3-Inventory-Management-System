<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if(!($this->session->userdata('isUserLoggedIn'))){
			redirect('users/login');
		}
        
		}

	public function index()
	{
		$data=array();
		$this->load->model('model_vendors');
		$data['vendorlist']=$this->model_vendors->fetchVendorData();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('vendor-list',$data);
		$this->load->view('templates/footer');
	}

	/*
	* Its checks the Vendor form validation 
	* and if the validation is successfully then it inserts the data into the database 
	* and returns the json format operation messages
	*/
	public function create()
	{
		$this->load->model('model_vendors');

		$response = array();

		$this->form_validation->set_rules('vendor_name', 'Vendor_name', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'vendor_name' => $this->input->post('vendor_name'),
        		'status' => $this->input->post('status'),	
        	);

        	$create = $this->model_vendors->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Vendor Succesfully created');
				redirect(base_url('vendor'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Vendor not created');
				redirect(base_url('vendor'));
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
		$this->load->model('model_vendors');
		$data['vendorById']=$this->model_vendors->fetchVendorDataById($id);
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit-vendor',$data);
		$this->load->view('templates/footer');
	}
	
	public function fetchVendorById($id)
	{
	    $data = array();  
	    $this->load->model("model_vendors");  
	    $data['vendorById'] = $this->model_vendors->fetchVendorDataById($_POST["user_id"]);  
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('vendor-list',$data);
		$this->load->view('templates/footer');
		
	}
	
	public function update($id)
	{
		if($id) {
			$this->form_validation->set_rules('vendor_name', 'Vendor name', 'trim|required');
			$this->form_validation->set_rules('status', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'vendor_name' => $this->input->post('vendor_name'),
	        		'status' => $this->input->post('status'),	
	        	);

	        	$this->load->model('model_vendors');
				$update=$this->model_vendors->updateVendorDataById($data,$id);
				if($update)
				{
					$this->session->set_flashdata('success','Vendor Succesfully updated');
					redirect(base_url('vendor'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','Vendor not updated');
					redirect(base_url('vendor'));
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
			$this->load->model('model_vendors');
			$delete=$this->model_vendors->deleteVendorDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','Vendor Succesfully deleted');
				redirect(base_url('vendor'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','Vendor not deleted');
				redirect(base_url('vendor'));
			}
			
		}
	
	
}
