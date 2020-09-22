<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {
	
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
		$this->load->model('model_vendors');
		$this->load->model('model_purchase');
		$data['vendors']=$this->model_vendors->fetchVendorData();
		$data['purchaseData']=$this->model_purchase->fetchPurchaseData();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('purchase-list',$data);
		$this->load->view('templates/footer');
	}
	
	
	public function add()
	{
		$this->load->model('model_purchase');

		$response = array();

		$upload_bill_image = $this->upload_bill_image();
		
		$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
		$this->form_validation->set_rules('vendor_name', 'Vendor_name', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Category_name', 'trim|required');
		$this->form_validation->set_rules('item_price', 'Item_price', 'trim|required');
		$this->form_validation->set_rules('buyer_name', 'Buyer_name', 'trim|required');
		$this->form_validation->set_rules('purchase_date', 'Purchase_date', 'trim|required');
		$this->form_validation->set_rules('warranty_ex_date', 'Warranty_ex_date', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'item_name' => $this->input->post('item_name'),
        		'vendor_name' => $this->input->post('vendor_name'),
        		'quantity' => $this->input->post('quantity'),
        		'item_price' => $this->input->post('item_price'),
        		'buyer_name' => $this->input->post('buyer_name'),
				'bill_image' => $upload_bill_image,
        		'purchase_date' => $this->input->post('purchase_date'),	
        		'warranty_ex_date' => $this->input->post('warranty_ex_date'),	
        		'description' => $this->input->post('description')	
        	);

        	$create = $this->model_purchase->create($data);
        	if($create == true) {
				
				$this->session->set_flashdata('success','Purchase info Succesfully Added');
				redirect(base_url('purchase'));
        	}
        	else {
        	
				$this->session->set_flashdata('error','Purchase not Added');
				redirect(base_url('purchase'));
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
	
	
	public function upload_bill_image()
    {
    	
        $config['upload_path'] = 'uploads/purchase_files';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
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
    } 
	
	
		public function view_pdf($id)
		{
			$data=array();
			$this->load->model('model_purchase');
			$data['billById']=$this->model_purchase->fetchPurchaseBillById($id);
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('view-bill',$data);
			$this->load->view('templates/footer');
		}
		
		public function view_jpg($id)
		{
			$data=array();
			$this->load->model('model_purchase');
			$data['billById']=$this->model_purchase->fetchPurchaseBillById($id);
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('view-image',$data);
			$this->load->view('templates/footer');
		}
	
	
		public function view($id)
		{
			$data=array();
			$this->load->model('model_purchase');
			$this->load->model('model_vendors');
			$data['purchaseById']=$this->model_purchase->fetchPurchaseDataById($id);
			$data['vendors']=$this->model_vendors->fetchVendorData();
			$data['title']="JAYSON GROUP - Inventory Management Systems";
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('edit-purchase',$data);
			$this->load->view('templates/footer');
		}
	
	
	
		public function update($id)
		{
			if($id) {

				$response = array();
				
				$this->form_validation->set_rules('item_name', 'Item_name', 'trim|required');
				$this->form_validation->set_rules('vendor_name', 'Vendor_name', 'trim|required');
				$this->form_validation->set_rules('quantity', 'Category_name', 'trim|required');
				$this->form_validation->set_rules('item_price', 'Item_price', 'trim|required');
				$this->form_validation->set_rules('buyer_name', 'Buyer_name', 'trim|required');
				$this->form_validation->set_rules('purchase_date', 'Purchase_date', 'trim|required');
				$this->form_validation->set_rules('warranty_ex_date', 'Warranty_ex_date', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');

				$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
				
				
				$upload_bill_image = $this->upload_bill_image();
				

				if ($this->form_validation->run() == TRUE) {

						$data = array(
						'item_name' => $this->input->post('item_name'),
						'vendor_name' => $this->input->post('vendor_name'),
						'quantity' => $this->input->post('quantity'),
						'item_price' => $this->input->post('item_price'),
						'buyer_name' => $this->input->post('buyer_name'),
						'purchase_date' => $this->input->post('purchase_date'),
						'warranty_ex_date' => $this->input->post('warranty_ex_date'),
						'bill_image' => $upload_bill_image,
						'description' => $this->input->post('description')	
						);
						$data1 = array(
						'item_name' => $this->input->post('item_name'),
						'vendor_name' => $this->input->post('vendor_name'),
						'quantity' => $this->input->post('quantity'),
						'item_price' => $this->input->post('item_price'),
						'buyer_name' => $this->input->post('buyer_name'),
						'purchase_date' => $this->input->post('purchase_date'),
						'warranty_ex_date' => $this->input->post('warranty_ex_date'),
						//'bill_image' => $upload_bill_image,
						'description' => $this->input->post('description')	
						);
						$file=$this->input->post('bill_image');
						if($file=="")
						{
								$this->load->model('model_purchase');
								$update=$this->model_purchase->updatePurchaseDataById($data1,$id);
								if($update)
								{
									$this->session->set_flashdata('success','Purchase item data Succesfully updated');
									redirect(base_url('purchase'));
								}
								else 
								{
									
									$this->session->set_flashdata('error','Purchase item data not updated');
									redirect(base_url('purchase'));
								}
						}
						else 
						{
								$this->load->model('model_purchase');
								$update=$this->model_purchase->updatePurchaseDataById($data,$id);
								if($update)
								{
									$this->session->set_flashdata('success','Purchase item data Succesfully updated');
									redirect(base_url('purchase'));
								}
								else 
								{
									
									$this->session->set_flashdata('error','Purchase item data not updated');
									redirect(base_url('purchase'));
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
	
	
	
	
		public function delete($id)
			{
				$this->load->model('model_purchase');
				$delete=$this->model_purchase->deletePurchaseDataById($id);
				if($delete)
				{
					$this->session->set_flashdata('success','Purchase item data Succesfully deleted');
					redirect(base_url('purchase'));
				}
				else 
				{
					
					$this->session->set_flashdata('error','Purchase item data not deleted');
					redirect(base_url('purchase'));
				}
				
			}
	
	
	
}




