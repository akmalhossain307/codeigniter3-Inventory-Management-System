<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
	
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
		$this->load->model('model_stocks');
		$data['categories']=$this->model_category->fetchActiveCategoryData();
		$data['stocks']=$this->model_stocks->fetchStocksData();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('stock-list',$data);
		$this->load->view('templates/footer');
	}
	
	
	public function add()
	{
		$this->load->model('model_stocks');

		$response = array();

		$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
		$this->form_validation->set_rules('category_name', 'Category_name', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Category_name', 'trim|required');
		$this->form_validation->set_rules('adding_date', 'Adding_date', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'item_name' => $this->input->post('item_name'),
        		'category_name' => $this->input->post('category_name'),
        		'quantity' => $this->input->post('quantity'),
        		'adding_date' => $this->input->post('adding_date'),
        		'status' => $this->input->post('status')	
        	);

        	$create = $this->model_stocks->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Stock Succesfully Added');
				redirect(base_url('stock'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Stock not Added');
				redirect(base_url('stock'));
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
		$this->load->model('model_stocks');
		$this->load->model('model_category');
		$data['stockById']=$this->model_stocks->fetchStockDataById($id);
		$data['categories']=$this->model_category->fetchActiveCategoryData();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit-stock',$data);
		$this->load->view('templates/footer');
	}
	
	
	
	public function update($id)
	{
		if($id) {

			$response = array();

			$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
			$this->form_validation->set_rules('category_name', 'Category_name', 'trim|required');
			$this->form_validation->set_rules('quantity', 'Category_name', 'trim|required');
			$this->form_validation->set_rules('adding_date', 'Adding_date', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'item_name' => $this->input->post('item_name'),
					'category_name' => $this->input->post('category_name'),
					'quantity' => $this->input->post('quantity'),
					'adding_date' => $this->input->post('adding_date'),
					'status' => $this->input->post('status')	
				);

	        	$this->load->model('model_stocks');
				$update=$this->model_stocks->updateStockDataById($data,$id);
				if($update)
				{
					$this->session->set_flashdata('success','Stock item Succesfully updated');
					redirect(base_url('stock'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','Stock item not updated');
					redirect(base_url('stock'));
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
			$this->load->model('model_stocks');
			$delete=$this->model_stocks->deleteStockDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','Stock item Succesfully deleted');
				redirect(base_url('stock'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','Stock item not deleted');
				redirect(base_url('stock'));
			}
			
		}
	
	
	
}




