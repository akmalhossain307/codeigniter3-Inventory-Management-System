<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if(!($this->session->userdata('isUserLoggedIn'))){
			redirect('users/login');
		}
        
		}

	public function index()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		
		//$this->load->model('model_report');
		//$data['totalStocks']=$this->model_dashboard->count_total_stock_items();
		//$data['totalVendors']=$this->model_dashboard->count_total_vendors();
		//$data['totalBrands']=$this->model_dashboard->count_total_brands();
		//$data['totalCategories']=$this->model_dashboard->count_total_categories();
		//$data['totalInventoryUsers']=$this->model_dashboard->count_total_inventory_users();
		
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('reports');
		$this->load->view('templates/footer');
	}
	
	public function stock_report()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_report');
		$data['totalStocks']=$this->model_report->generate_stock_report();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('stock-report',$data);
		$this->load->view('templates/footer');
	}
	
	public function purchase_report()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_report');
		$data['totalPurchase']=$this->model_report->generate_purchase_report();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('purchase-report',$data);
		$this->load->view('templates/footer');
	}
	
	public function inventory_report()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_report');
		$data['totalInventory']=$this->model_report->generate_inventory_report();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('inventory-report',$data);
		$this->load->view('templates/footer');
	}
	
	public function inventory_user_report()
	{
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_report');
		$data['totalInventoryUser']=$this->model_report->generate_inventory_user_report();
		/* print_r($data);
		exit(); */
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('inventory-user-report',$data);
		$this->load->view('templates/footer');
	}
	
	public function fetch_assigned_inventory($user_serial)
	{
		//$data['title']="JAYSON GROUP - Inventory Management Systems";
		$this->load->model('model_report');
		$data['assignedInventory']=$this->model_report->fetch_assigned_inventory_by_user_serial($user_serial);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('inventory-user-report',$data);
		$this->load->view('templates/footer');
	}
	


}
