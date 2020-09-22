<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
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
		$data['categories']=$this->model_category->fetchActiveCategoryData();
		
		$this->load->model('model_brands');
		$data['brands']=$this->model_brands->fetchBrandData();
		
		$this->load->model('model_vendors');
		$data['vendors']=$this->model_vendors->fetchVendorData();
		
		$this->load->model('model_inventories');
		$data['inventories']=$this->model_inventories->fetchInventoryData();
		
		
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('inventory-list',$data);
		$this->load->view('templates/footer');
	}
	
	
		
	public function create()
	{
		$this->load->model('model_inventories');

		$response = array();

		//$upload_bill_image = $this->upload_bill_image();
		//$upload_inventory_image = $this->upload_inventory_image();
		
		$this->form_validation->set_rules('item_serial', 'Item Serial', 'trim|required');
		$this->form_validation->set_rules('vendor_name', 'Vendor_name', 'trim|required');
		$this->form_validation->set_rules('brand_name', 'Brand_name', 'trim|required');
		$this->form_validation->set_rules('category_name', 'Vendor_name', 'trim|required');
		$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
		$this->form_validation->set_rules('item_condition', 'Item_condition', 'trim|required');
		//$this->form_validation->set_rules('purchase_date', 'Purchase Date', 'trim|required');
		//$this->form_validation->set_rules('warranty_ex_date', 'Warranty ex. Date', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'item_serial' => $this->input->post('item_serial'),
        		'vendor_name' => $this->input->post('vendor_name'),
        		'brand_name' => $this->input->post('brand_name'),
        		'category_name' => $this->input->post('category_name'),
        		'item_name' => $this->input->post('item_name'),
        		//'bill_image' => $upload_bill_image,
        		//'inventory_image' => $upload_inventory_image,
        		'item_name' => $this->input->post('item_name'),
        		'item_condition' => $this->input->post('item_condition'),
        		'adding_date' => $this->input->post('adding_date'),
        		//'purchase_date' => $this->input->post('purchase_date'),
        		//'warranty_ex_date' => $this->input->post('warranty_ex_date'),	
        		'quantity' => $this->input->post('quantity'),	
        		'description' => $this->input->post('description')	
        	);
			
			$this->load->model('model_stocks');
			$fetch=$this->model_stocks->fetchStocksData();
			foreach($fetch as $stock)
			{
				//$id=$stock->id;
				//$qty=$stock->quantity;
				if($stock->item_name==$this->input->post('item_name'))
				{
					$id=$stock->id;
					$qty=$stock->quantity-$this->input->post('quantity');
					$quantity=array('quantity'=>$qty);
					$this->model_stocks->updateStocksQtyData($quantity,$id);
					
				}
			}

        	$create = $this->model_inventories->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Inventory Succesfully Added');
				redirect(base_url('inventory'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Inventory not Added');
				redirect(base_url('inventory'));
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
	
	
	/* public function upload_bill_image()
    {
    	
        $config['upload_path'] = 'uploads/inventory_images';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '2000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('bill_image'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['bill_image']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
    } */
	
	
	
	/* public function upload_inventory_image()
    {
    	
        $config['upload_path'] = 'uploads/inventory_images';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('inventory_image'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['inventory_image']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
    } */
	
	
	
	public function inventory_user()
	{
	
		$data=array();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		
		/* $this->load->model('model_category');
		$data['categories']=$this->model_category->fetchActiveCategoryData();
		
		$this->load->model('model_brands');
		$data['brands']=$this->model_brands->fetchBrandData();
		
		$this->load->model('model_vendors');
		$data['vendors']=$this->model_vendors->fetchVendorData();*/
		
		$this->load->model('model_inventories');
		$data['notAssignedInventories']=$this->model_inventories->fetchNotAssignedInventoryData();
		
		$this->load->model('model_inventories');
		$data['inventoryUsers']=$this->model_inventories->fetchInventoryUsersData(); 
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('inventory-user',$data);
		$this->load->view('templates/footer');
	}
	
	
	
	
	
	
	
	
	public function add_inventory_user()
	{
	
		$this->load->model('model_inventories');

		$response = array();
		
		$this->form_validation->set_rules('user_serial', 'User Serial', 'trim|required');
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
		$this->form_validation->set_rules('user_department', 'User Department', 'trim|required');
		$this->form_validation->set_rules('user_designation', 'User Designation', 'trim|required');
		$this->form_validation->set_rules('user_location', 'User Location', 'trim|required');
		$this->form_validation->set_rules('user_ip', 'User IP', 'trim|required');
		$this->form_validation->set_rules('assigned_inventory', 'Assigned Inventory', 'trim|required');
		//$this->form_validation->set_rules('inventory_id', 'Inventory id', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		
		$user_data=$this->model_inventories->fetchInventoryUsersData();
			$user_serial	=$this->input->post('user_serial');
			$user_ip		=$this->input->post('user_ip');
			foreach($user_data as $data)
			{
				$serial	=$data->user_serial;
				$ip		=$data->user_ip;
				if($serial==$user_serial)
				{
					$this->session->set_flashdata("error","<h2 style='color:red'>User serial No:'$serial' already exists</h2>");
					redirect(base_url('inventory/inventory_user'));
				}
				else if($ip==$user_ip)
				{
					$this->session->set_flashdata("error","<h2 style='color:red'>User IP:'$ip' already exists</h2>");
					redirect(base_url('inventory/inventory_user'));
				}
			}
		

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'user_serial' => $this->input->post('user_serial'),
        		'user_name' => $this->input->post('user_name'),
        		'user_department' => $this->input->post('user_department'),
        		'user_designation' => $this->input->post('user_designation'),
        		'user_location' => $this->input->post('user_location'),
        		'user_ip' => $this->input->post('user_ip'),
        		'assigned_inventory' => $this->input->post('assigned_inventory')
        		//'inventory_id' => $this->input->post('inventory_id')
        			
        	);
			
			

        	$create = $this->model_inventories->add_inventory_user($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Inventory user Succesfully Added');
				redirect(base_url('inventory/inventory_user'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Inventory user not Added');
				redirect(base_url('inventory/inventory_user'));
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
	
	
	
	
	
	public function view_assigned_inventory($id)
	{
	
		$data=array();
		$data['title']="JAYSON GROUP - Inventory Management Systems";
		
		/* $this->load->model('model_category');
		$data['categories']=$this->model_category->fetchActiveCategoryData();
		
		$this->load->model('model_brands');
		$data['brands']=$this->model_brands->fetchBrandData();
		
		$this->load->model('model_vendors');
		$data['vendors']=$this->model_vendors->fetchVendorData(); */
		
		$this->load->model('model_inventories');
		$data['assignedInventory']=$this->model_inventories->fetchAssignedInventoryData($id);
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('assigned-inventory',$data);
		$this->load->view('templates/footer');
	}
	
	
	public function fetchInventoryUserById($id)
	{
	    $data = array(); 
		
		$this->load->model('model_inventories');
		$data['notAssignedInventories']=$this->model_inventories->fetchNotAssignedInventoryData();
		
		
	    $this->load->model("model_inventories");  
	    $data['inventoryUserData'] = $this->model_inventories->fetchInventoryUserDataById($id);  
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit-inventory-user',$data);
		$this->load->view('templates/footer');
		
	}
	
	
	
	
	
	public function update_inventory_user($id)
	{
		if($id) {
			$this->form_validation->set_rules('user_serial', 'User Serial', 'trim|required');
			$this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
			$this->form_validation->set_rules('user_department', 'User Department', 'trim|required');
			$this->form_validation->set_rules('user_designation', 'User Designation', 'trim|required');
			$this->form_validation->set_rules('user_location', 'User Location', 'trim|required');
			$this->form_validation->set_rules('user_ip', 'User IP', 'trim|required');
			$this->form_validation->set_rules('assigned_inventory', 'Assigned Inventory', 'trim|required');
			//$this->form_validation->set_rules('inventory_id', 'Inventory id', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'user_serial' => $this->input->post('user_serial'),
					'user_name' => $this->input->post('user_name'),
					'user_department' => $this->input->post('user_department'),
					'user_designation' => $this->input->post('user_designation'),
					'user_location' => $this->input->post('user_location'),
					'user_ip' => $this->input->post('user_ip'),
					'assigned_inventory' => $this->input->post('assigned_inventory')
					//'inventory_id' => $this->input->post('inventory_id')
						
				);

	        	$this->load->model('model_inventories');
				$update=$this->model_inventories->updateInventoryUserDataById($data,$id);
				if($update)
				{
					$this->session->set_flashdata('success','Inventory user Succesfully updated');
					redirect(base_url('inventory/inventory_user'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','Inventory user not updated');
					redirect(base_url('inventory/inventory_user'));
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
	
	public function delete_inventory_user($id)
		{
			$this->load->model('model_inventories');
			$delete=$this->model_inventories->deleteInventoryUserDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','Inventory user Succesfully deleted');
				redirect(base_url('inventory/inventory_user'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','Inventory user not deleted');
				redirect(base_url('inventory/inventory_user'));
			}
			
		}
		
		public function activate_user($id)
		{
			
			if($id) {
				
				$data = array(
	        		'user_status' =>1
	        			
	        	);
				$this->load->model('model_inventories');
				$update=$this->model_inventories->activateInventoryUserById($data,$id);
				if($update)
				{
					//$this->session->set_flashdata('success','Category Succesfully updated');
					redirect(base_url('inventory/inventory_user'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','User not activated');
					redirect(base_url('inventory/inventory_user'));
				}
			}
			
		}
		
		
		
		public function deactivate_user($id)
		{
			
			if($id) {
				
				$data = array(
	        		'user_status' =>0
	        			
	        	);
				$this->load->model('model_inventories');
				$update=$this->model_inventories->deactivateInventoryUserById($data,$id);
				if($update)
				{
					//$this->session->set_flashdata('success','Category Succesfully updated');
					redirect(base_url('inventory/inventory_user'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','User not deactivated');
					redirect(base_url('inventory/inventory_user'));
				}
			}
			
		}
		
		
		
		
		public function view_pdf($id)
		{
			$data=array();
			$this->load->model('model_inventories');
			$data['billById']=$this->model_inventories->fetchInventoryBillById($id);
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('view-bill',$data);
			$this->load->view('templates/footer');
		}
		
		
		public function show_assignment($user_serial)
		{
			$data=array();
			$this->load->model('model_inventories');
			$data['assignmentData']=$this->model_inventories->fetchInventoryAssignmentDataByUserSerial($user_serial);
			$data['assignedUserData']=$this->model_inventories->fetchAssignedUserDataByUserSerial($user_serial);
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('view-inventory-assignment',$data);
			$this->load->view('templates/footer');
		}
		
		
		public function assign_inventory($id)
		{
			$data=array();
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->model('model_inventories');
			$data['inventoryUsers']=$this->model_inventories->fetchInventoryUsersData();
			
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('assign-inventory',$data);
			$this->load->view('templates/footer');
			
			if($id) {
			$this->form_validation->set_rules('user_serial', 'User Serial', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'user_serial' => $this->input->post('user_serial'),	
					'assignment_status' =>1 	
				);
				
				$user_serial=$this->input->post('user_serial');
				$user_data=array('assigned_inventory'=>$id);
				$insert=$this->model_inventories->updateInventoryUserData($data,$id);
				if($insert)
				{
					$update=$this->model_inventories->updateInventoryUserAssignment($user_data,$user_serial);
					if($update)
					{
						$this->session->set_flashdata('success','Inventory assigned to user Succesfully ');
						redirect(base_url('inventory'));
					}
					else 
					{
						
						$this->session->set_flashdata('error','Inventory user not Assigned');
						redirect(base_url('inventory'));
					}
					
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
		
		
		
		public function view($id)
		{
			$data=array();
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->model('model_inventories');
			$data['inventoryDataById']=$this->model_inventories->fetchInventoryDataById($id);
			
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('view-inventory',$data);
			$this->load->view('templates/footer');
			
		}
		
		
		public function edit($id)
		{
			$data=array();
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			
			$this->load->model('model_category');
			$data['categories']=$this->model_category->fetchActiveCategoryData();
			
			$this->load->model('model_brands');
			$data['brands']=$this->model_brands->fetchBrandData();
			
			$this->load->model('model_vendors');
			$data['vendors']=$this->model_vendors->fetchVendorData();
		
			$this->load->model('model_inventories');
			$data['inventoryDataById']=$this->model_inventories->fetchInventoryDataById($id);
			
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('edit-inventory',$data);
			$this->load->view('templates/footer');
		}
		
		
		
		
		public function update($id)
		{
			

			$response = array();

			$upload_bill_image = $this->upload_bill_image();
			//$upload_inventory_image = $this->upload_inventory_image();
			
			$this->form_validation->set_rules('item_serial', 'Item Serial', 'trim|required');
			$this->form_validation->set_rules('user_serial', 'User Serial', 'trim|required');
			$this->form_validation->set_rules('vendor_name', 'Vendor_name', 'trim|required');
			$this->form_validation->set_rules('brand_name', 'Brand_name', 'trim|required');
			$this->form_validation->set_rules('category_name', 'Vendor_name', 'trim|required');
			$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
			$this->form_validation->set_rules('purchase_date', 'Purchase Date', 'trim|required');
			$this->form_validation->set_rules('warranty_ex_date', 'Warranty ex. Date', 'trim|required');
			$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
			

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'item_serial' => $this->input->post('item_serial'),
					'user_serial' => $this->input->post('user_serial'),
					'vendor_name' => $this->input->post('vendor_name'),
					'brand_name' => $this->input->post('brand_name'),
					'category_name' => $this->input->post('category_name'),
					'item_name' => $this->input->post('item_name'),
					'bill_image' => $upload_bill_image,
					//'inventory_image' => $upload_inventory_image,
					'item_name' => $this->input->post('item_name'),
					'adding_date' => $this->input->post('adding_date'),
					'purchase_date' => $this->input->post('purchase_date'),
					'warranty_ex_date' => $this->input->post('warranty_ex_date'),	
					'quantity' => $this->input->post('quantity'),	
					'description' => $this->input->post('description')	
				);
				$this->load->model('model_inventories');
				$update = $this->model_inventories->updateInventoryItemById($data,$id);
				if($update == true) {
					
					$this->session->set_flashdata('success','Inventory Item Succesfully Updated');
					redirect(base_url('inventory'));
				}
				else {
				
					$this->session->set_flashdata('error','Inventory item not Updated');
					redirect(base_url('inventory'));
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
		
		public function remove($id)
		{
			$this->load->model('model_inventories');
			$delete=$this->model_inventories->deleteInventoryDataById($id);
			if($delete)
			{
				$this->session->set_flashdata('success','Inventory data Succesfully deleted');
				redirect(base_url('inventory'));
			}
			else 
			{
				
				$this->session->set_flashdata('error','Inventory data not deleted');
				redirect(base_url('inventory'));
			}
			
		}
		
		
	
	
	
	
}
