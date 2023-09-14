<?php
class Appication_model extends CI_Model{

    public function select_zayavki(){
        $sql = 'select users.fio, zayavki.name, discription,photo_d,photo_p, status,date_start,date_end from users, zayavki where users.id_user=zayavki.id_user ORDER BY date_end DESC LIMIT 4';
        $result = $this->db->query($sql);
        return $result->result_array(); 
    }
    public function select_myapplic($id_user){
        $sql =' select zayavki.id_zayavki,name, discription, status,date_start, category.name_category from zayavki, category where id_user=? and zayavki.id_category=category.id_category  ';
        $result = $this->db->query($sql,array($id_user));
        return $result->result_array(); 
    }
    public function ins_applic($id_user, $name, $discription,$name_category, $photo_d){
        $sql =' INSERT INTO zayavki(date_start, name, discription,photo_d,id_user,id_category,status) VALUES(CURRENT_DATE(),?,?,?,?,?,"Новая")';
        $result = $this->db->query($sql,array($name,$discription,$photo_d,$id_user, $name_category));
        return $this->db->insert_id(); 
    }
    public function delete_applic($id_zayavki){
        $sql ='DELETE FROM zayavki WHERE id_zayavki = ?';
        $this->db->query($sql,array($id_zayavki));
     
    }
    public function select_applic(){
        $sql = 'select users.fio, zayavki.id_zayavki, name, discription, status,date_start,date_end, category.name_category from users, zayavki,category where users.id_user=zayavki.id_user and zayavki.id_category=category.id_category ';
        $result = $this->db->query($sql);
        return $result->result_array(); 
    }
   public function update_status($id_zayavki){
    $sql = 'update zayavki set status = "Принято" where id_zayavki=(?) ';
    $this->db->query($sql,$id_zayavki);
}
}