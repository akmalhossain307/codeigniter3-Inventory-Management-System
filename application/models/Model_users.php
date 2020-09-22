<?php 
class Model_users extends CI_Model{
	public function insert_user($userData)
	{
		//insert user data to users table
        $insert = $this->db->insert("tbl_user", $userData);
        
        //return the status
        if($insert){
           return $this->db->insert_id();
            //return true;
        }else{
            return false;
        }
	}
	

    /* function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    } */
	
	
	
	public function getRows($data)
	{
		//$info=array();
		$result=$this->db->select('*')
			->from('tbl_user')
			->where($data)
			->get()
			->result();
		return $result;
	}
	
	public function selectUserEmail($email)
	{
		$result=$this->db->select('*')
			->from('tbl_user')
			->where("username",$email)
			->get()
			->result();
		return $result;
	}
}

?>