<?php
class Category_model extends CI_Model{

public function select_category(){
    $sql =' SELECT * FROM category';
    $result = $this->db->query($sql);
    return $result->result_array(); 
}
}