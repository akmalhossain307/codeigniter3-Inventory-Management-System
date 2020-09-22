<?php 
class Model_report extends CI_Model{

	public function generate_stock_report()
	{
			$result=$this->db->select('*')
			->from('stocks')
			->get()
			->result();
		return $result;
			
	}
	
	public function generate_purchase_report()
	{
			$result=$this->db->select('*')
			->from('purchase')
			->get()
			->result();
		return $result;
			
	}
	
	public function generate_inventory_report()
	{
			$result=$this->db->select('*')
			->from('inventories')
			->get()
			->result();
		return $result;
			
	}
	
	public function generate_inventory_user_report()
	{
		/* SELECT users.user_id, app.apply_from 
FROM users 
INNER JOIN applications 
  ON  users.user_id = app.apply_from 
WHERE users.user_code='1' */
		
			/* $result=$this->db->select(' SELECT inventory_users.user_name,inventory_users.user_department,inventory_users.user_designation,inventory_users.user_location,inventory_users.user_ip,inventories.item_name,inventories.quantity,inventories.description FROM inventory_users INNER JOIN inventories ON inventory_users.user_serial=inventories.user_serial') */
			/* $sql='SELECT inventory_users.user_name,inventory_users.user_department,inventory_users.user_designation,inventory_users.user_location,inventory_users.user_ip,DISTINCT(inventories.item_name),inventories.quantity,inventories.description FROM inventory_users INNER JOIN inventories ON inventory_users.user_serial=inventories.user_serial GROUP BY inventory_users.user_ip'; */
			$sql='SELECT inventory_users.user_name,inventory_users.user_department,inventory_users.user_designation,inventory_users.user_location,inventory_users.user_ip,inventories.item_name,inventories.quantity as qty,inventories.description FROM inventory_users INNER JOIN inventories ON inventory_users.user_serial=inventories.user_serial';
			$query=$this->db->query($sql);
			return $query->result_array();
		
			
	}
	
	public function fetch_assigned_inventory_by_user_serial($user_serial)
	{
			$result=$this->db->select('*')
			->from('inventories')
			->where('user_serial',$user_serial)
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
  
}
?>