<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if(!($this->session->userdata('isUserLoggedIn'))){
			redirect('users/login');
		}
        
		}

	public function index()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		
		$this->load->model('model_dashboard');
		$data['totalStocks']=$this->model_dashboard->count_total_stock_items();
		$data['totalVendors']=$this->model_dashboard->count_total_vendors();
		$data['totalBrands']=$this->model_dashboard->count_total_brands();
		//$data['totalCategories']=$this->model_dashboard->count_total_categories();
		$data['totalInventoryUsers']=$this->model_dashboard->count_total_inventory_users();
		$data['countTotalInventory']=$this->model_dashboard->count_total_inventory();
		$data['totalInventories']=$this->model_dashboard->num_of_inventories();
		$data['assignedInventories']=$this->model_dashboard->count_assigned_inventories();
		$data['unassignedInventories']=$this->model_dashboard->count_unassigned_inventories();
		
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}
}
