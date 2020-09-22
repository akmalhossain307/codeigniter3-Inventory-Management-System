<?php 
class Model_inventories extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('inventories', $data);
			return ($insert == true) ? true : false;
		}
	}
	
	public function fetchInventoryData()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->get()
			->result();
		return $result;
			
	}
	
	
	
	public function fetchInventoryDataById($id)
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	
	function updateInventoryItemById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("inventories", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  
	  function activateInventoryUserById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("inventory_users", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  function deactivateInventoryUserById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("inventory_users", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  
	
	public function fetchVendorDataById($id)
	{
			$result=$this->db->select('*')
			->from('vendors')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	
	
	
	
	 function updateVendorDataById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("vendors", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      } 
	  
	   
	  
	 

	public function deleteVendorDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("vendors");
		   if($delete)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	
	public function add_inventory_user($data)
	{
		if($data) {
			$insert = $this->db->insert('inventory_users', $data);
			return ($insert == true) ? true : false;
		}
	}
	
	public function fetchNotAssignedInventoryData()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where("assignment_status", "0")
			->get()
			->result();
		return $result;
			
	}
	
	
	public function fetchInventoryUsersData()
	{
			$result=$this->db->select('*')
			->from('inventory_users')
			->get()
			->result();
		return $result;
			
	}
	
	
	public function fetchAssignedInventoryData($id)
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where("user_serial", $id)
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchInventoryUserDataById($id)
	{
			$result=$this->db->select('*')
			->from('inventory_users')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	
	
	public function updateInventoryUserDataById($data,$id)
	{
		   $this->db->where("id", $id);  
           $update=$this->db->update("inventory_users",$data);
		   if($update)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	
	
	public function deleteInventoryUserDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("inventory_users");
		   if($delete)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	
	
	
	
	public function fetchInventoryBillById($id)
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	
	
	
	
	
	
	
	public function updateInventoryUserAssignment($user_data,$user_serial)
	{
		   $this->db->where("user_serial", $user_serial);  
           $update=$this->db->update("inventory_users",$user_data);
		   if($update)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	 function updateInventoryUserData($data,$id) 
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("inventories", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  
	  public function fetchInventoryAssignmentDataByUserSerial($user_serial)
		{
				$result=$this->db->select('*')
				->from('inventories')
				->where("user_serial", $user_serial)
				->get()
				->result();
			return $result;
				
		}
		
		public function fetchAssignedUserDataByUserSerial($user_serial)
		{
				$result=$this->db->select('*')
				->from('inventory_users')
				->where("user_serial", $user_serial)
				->get()
				->result();
			return $result;
				
		}
		
		
		
		/* public function fetchInventoryDataById($id)
		{
				$result=$this->db->select('*')
				->from('inventories')
				->where("id", $id)
				->get()
				->result();
			return $result;
				
		} */
		
		
		public function deleteInventoryDataById($id)
		{
			   $this->db->where("id", $id);  
			   $delete=$this->db->delete("inventories");
			   if($delete)
			   {
				   return true;
			   }
			   else 
			   {
				   return false;
			   }
				
				
		}
	  
}
?>