<?php 
class Model_brands extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('brands', $data);
			return ($insert == true) ? true : false;
		}
	}
	
	public function fetchBrandData()
	{
			$result=$this->db->select('*')
			->from('brands')
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchBrandDataById($id)
	{
			$result=$this->db->select('*')
			->from('brands')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	public function updateBrandDataById($data,$id)
	{
		   $this->db->where("id", $id);  
           $update=$this->db->update("brands",$data);
		   if($update)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	public function deleteBrandDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("brands");
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