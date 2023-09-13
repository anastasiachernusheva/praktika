<?php
class User_model extends CI_Model{
 
    public function ins_user($fio,$email, $login, $password ){
        $sql = 	'CALL ins_user(?,?,?,?)'; 
        $this->db->query($sql, array($fio, $email, $login, $password));
    }
    public function avtoriz($login,$password){
        $sql = 'CALL avtoriz(?,?)';
        $result = $this->db->query($sql, array($login,$password));
      return $result->row_array();    
    }
    public function login($login){
      $sql = 'select login from users where login = (?)';
      $result = $this->db->query($sql, array($login));
    return $result->row_array();    
  }
 }