<?php 
class Model_category extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('categories', $data);
			return ($insert == true) ? true : false;
		}
	}
	public function fetchActiveCategoryData()
	{
			$result=$this->db->select('*')
			->from('categories')
			->where("status", "1")
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchCategoryData()
	{
			$result=$this->db->select('*')
			->from('categories')
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchCategoryDataById($id)
	{
			$result=$this->db->select('*')
			->from('categories')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	 public function updateCategoryDataById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("categories",$data);  
		   if($update)
		   {
			   return true;
		   }
			else 
			{
				return false;
			}
      }

	public function deleteCategoryDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("categories");
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