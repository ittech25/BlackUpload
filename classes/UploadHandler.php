<?php

class UploadHandler{
	private $db;
	
	public function __construct(){	
		$this->db = new Database;
	}
	
	public function add_file($file_id , $user_id, $file_data){
		$this->db->query("INSERT INTO files (file_id,user_id,file_data) VALUES (:file_id,:user_id,:file_data)");
		
		$this->db->bind(":file_id", $file_id, PDO::PARAM_STR);
		$this->db->bind(":user_id", $user_id, PDO::PARAM_STR);
		$this->db->bind(":file_data", $file_data, PDO::PARAM_STR);
		
		return $this->db->execute();
	}
	
	public function is_exist($file_id){
        $this->db->query("SELECT * FROM files WHERE file_id = :id");

        $this->db->bind(":id", $file_id, PDO::PARAM_STR);

        if ($this->db->execute()) {
            if ($this->db->rowCount()) {
                return true;
            } else {
                return false;
            }

        }
	}

	public function user_exist($user_id){
        $this->db->query("SELECT * FROM files WHERE user_id = :id");

        $this->db->bind(":id", $user_id, PDO::PARAM_STR);

        if ($this->db->execute()) {
            if ($this->db->rowCount()) {
                return true;
            } else {
                return false;
            }

        }
	}	
	public function get_file($file_id){
        $this->db->query("SELECT file_data FROM files WHERE file_id = :id");

        $this->db->bind(":id", $file_id, PDO::PARAM_STR);

        if ($this->db->execute()) {
            return $this->db->single();
        }
	}
	
	public function update_file($file_id, $user_id, $file_data){
      $this->db->query("UPDATE files SET user_id = :user_id, file_data = :file_data WHERE file_id = :file_id");

      $this->db->bind(":file_id", $file_id, PDO::PARAM_STR);
      $this->db->bind(":user_id", $user_id, PDO::PARAM_STR);
      $this->db->bind(":file_data", $file_data, PDO::PARAM_STR);
      
      if($this->db->execute()){
		 return true; 
	  }
	}
	
	public function delete_file($file_id, $user_id){
		$this->db->query("DELETE FROM files WHERE file_id = :id AND user_id = :uid");
		
		$this->db->bind(":id", $file_id, PDO::PARAM_STR);
		$this->db->bind(":uid", $user_id, PDO::PARAM_STR);
		
		return $this->db->execute();
	}
}
