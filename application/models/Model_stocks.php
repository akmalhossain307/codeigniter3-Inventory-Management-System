<?php 
class Model_stocks extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('stocks', $data);
			return ($insert == true) ? true : false;
		}
	}
	public function fetchStocksData()
	{
			$result=$this->db->select('*')
			->from('stocks')
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchStockDataById($id)
	{
			$result=$this->db->select('*')
			->from('stocks')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	 function updateStockDataById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("stocks", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  

	public function deleteStockDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("stocks");
		   if($delete)
		   {
			   return true;
		   }
		   else 
		   {
			   return false;
		   }
			
			
	}
	
	
	
	
	function updateStocksQtyData($quantity,$id)  
      { 
	  
           $this->db->where("id", $id);  
           $update=$this->db->update("stocks",$quantity);  
		   if($update)
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