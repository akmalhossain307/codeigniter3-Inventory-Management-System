<?php 
class Model_dashboard extends CI_Model{

	public function count_total_stock_items()
	{
			$result=$this->db->select('*')
			->from('stocks')
			->get()
			->result();
		return $result;
			
	}
	
	public function count_total_vendors()
	{
			$result=$this->db->select('*')
			->from('vendors')
			->get()
			->result();
		return $result;
			
	}
	public function count_total_brands()
	{
			$result=$this->db->select('*')
			->from('brands')
			->get()
			->result();
		return $result;
			
	}
	
	public function count_total_inventory_users()
	{
			$result=$this->db->select('*')
			->from('inventory_users')
			->get()
			->result();
		return $result;
			
	}
	
	public function count_total_inventory()
	{
		/* SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country; */

			$result=$this->db->select('item_name,SUM(quantity) as qty')
			->from('inventories')
			->group_by('item_name')
			->get()
			->result();
		return $result;
		
		
		 /* $sql = "SELECT item_name,SUM(quantity)as qty FROM inventories GROUP BY item_name";
		$query = $this->db->query($sql);
		return $query->result(); */ 		
	}
	public function num_of_inventories()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->get()
			->result();
		return $result;
			
	}
	public function count_assigned_inventories()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where('assignment_status',1)
			->get()
			->result();
		return $result;
			
	}
	public function count_unassigned_inventories()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where('assignment_status',0)
			->get()
			->result();
		return $result;
			
	}
  
}
?>