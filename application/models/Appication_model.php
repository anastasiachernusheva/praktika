<?php
class Appication_model extends CI_Model{

    public function select_zayavki(){
        $sql = 'select users.fio, zayavki.name, discription,photo_d,photo_p, status,date_start,date_end from users, zayavki where users.id_user=zayavki.id_user ORDER BY date_end DESC LIMIT 4';
        $result = $this->db->query($sql);
        return $result->result_array(); 
    }
    public function select_myapplic($id_user){
        $sql =' select zayavki.name, discription, status,date_start, category.name_category from zayavki, category where id_user=? and zayavki.id_category=category.id_category  ';
        $result = $this->db->query($sql,array($id_user));
        return $result->result_array(); 
    }
}