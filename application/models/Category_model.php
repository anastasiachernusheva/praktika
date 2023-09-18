<?php
class Category_model extends CI_Model{

public function select_category(){
    $sql =' SELECT * FROM category';
    $result = $this->db->query($sql);
    return $result->result_array(); 
}

public function delete_category($id_category){
    $sql ='DELETE FROM category WHERE id_category = ?';
    $this->db->query($sql,array($id_category));
 
}
public function ins_category($name_category){
    $sql =' INSERT INTO category(name_category) VALUES(?)';
    $result = $this->db->query($sql,array($name_category));
    return $this->db->insert_id(); 
}
}