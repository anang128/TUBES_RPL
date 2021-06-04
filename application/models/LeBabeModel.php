<?php

class LeBabeModel extends CI_model
{
    public function getData($table){
		return $this->db->get($table);
	}

    public function insertData($data,$table){
		$this->db->insert($table,$data);
	}

    public function updateData($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

    public function deleteData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function loginValidation(){
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
						->where('username',$username)
						->where('password',md5($password))
						->limit(1)
						->get('customer');

		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}

?>