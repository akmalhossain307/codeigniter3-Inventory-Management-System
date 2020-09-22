<?php 
class Model_purchase extends CI_Model{
	
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('purchase', $data);
			return ($insert == true) ? true : false;
		}
	}
	
	
	public function fetchPurchaseData()
	{
			$result=$this->db->select('*')
			->from('purchase')
			->get()
			->result();
		return $result;
			
	}
	
	
	public function fetchPurchaseBillById($id)
	{
			$result=$this->db->select('*')
			->from('purchase')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	public function fetchPurchaseDataById($id)
	{
			$result=$this->db->select('*')
			->from('purchase')
			->where("id", $id)
			->get()
			->result();
		return $result;
			
	}
	
	 function updatePurchaseDataById($data,$id)  
      {  
           $this->db->where("id", $id);  
           $update=$this->db->update("purchase", $data);  
		   if($update)
		   {
			   return true;
		   }
	   else {
		   return false;
	   }
      }
	  
	  

	public function deletePurchaseDataById($id)
	{
		   $this->db->where("id", $id);  
           $delete=$this->db->delete("purchase");
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