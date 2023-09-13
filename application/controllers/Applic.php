<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applic extends CI_Controller{

    public function add_applic(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navuser.php');
        $this->load->view('form.php');
   
            }
            
    public function lichcab(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navuser.php');
        $this->load->model('appication_model');
        $id_user = $this->session->userdata('id_user');
        $data['myapplic'] = $this->appication_model->select_myapplic($id_user);
        $this->load->view('view_user.php',$data);
        $this->load->view('temp/footer.php');
            }
            ///GKHJFGLKHF'SG;KHPRTKHM;LFGKH;LFGHK;L'FG
}