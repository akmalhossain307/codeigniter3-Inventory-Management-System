<?php 
class Model_vendors extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('vendors', $data);
			return ($insert == true) ? true : false;
		}
	}
	public function fetchVendorData()
	{
			$result=$this->db->select('*')
			->from('vendors')
			->get()
			->result();
		return $result;
			
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
	  
}
?>