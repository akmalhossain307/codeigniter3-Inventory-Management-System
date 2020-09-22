<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if(!($this->session->userdata('isUserLoggedIn'))){
			redirect('users/login');
		}
        
		}

	public function index()
	{
		$data=array();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_category');
		$data['categorylist']=$this->model_category->fetchCategoryData();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('category-list',$data);
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->model('model_category');

		$response = array();

		$this->form_validation->set_rules('category_name', 'Category_name', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'category_name' => $this->input->post('category_name'),
        		'status' => $this->input->post('status'),	
        	);

        	$create = $this->model_category->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Category Succesfully created');
				redirect(base_url('category'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Category not created');
				redirect(base_url('category'));
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
		$this->load->model('model_category');
		$data['categoryById']=$this->model_category->fetchCategoryDataById($id);
		//$data['categorylist']=$this->model_category->fetchCategoryData();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit-category',$data);
		$this->load->view('templates/footer');
	}
	
	
	
	public function update($id)
	{
		if($id) {
			$this->form_validation->set_rules('category_name', 'Category name', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'category_name' => $this->input->post('category_name'),
	        		'status' => $this->input->post('status'),	
	        	);

	        	$this->load->model('model_category');
				$update=$this->model_category->updateCategoryDataById($data,$id);
				if($update)
				{
					$this->session->set_flashdata('success','Category Succesfully updated');
					redirect(base_url('category'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','Category not updated');
					redirect(base_url('category'));
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
			$this->load->model('model_category');
			$delete=$this->model_category->deleteCategoryDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','Category Succesfully deleted');
				redirect(base_url('category'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','Category not deleted');
				redirect(base_url('category'));
			}
			
		}
	
}
