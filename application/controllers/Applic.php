<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applic extends CI_Controller{

    public function f_applic(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navuser.php');
        $this->load->model('category_model');
        $data['cat'] = $this->category_model->select_category();
        $this->load->view('form.php',$data);

            }
                public function add_applic(){
                    if (!empty($_POST)){
                        if(isset($_FILES['photo_d']) && $_FILES['photo_d']['error'] === UPLOAD_ERR_OK){
                            $id_user = $this->session->userdata('id_user');
                            var_dump($id_user);
                    $name = $_POST['name'];
                    $discription = $_POST['discription'];
                    $name_category = $_POST['name_category'];
                    $photo_d = $_FILES['photo_d']['name'];
                    $this->load->model('appication_model');
                    $this->appication_model->ins_applic($id_user, $name, $discription,$name_category, $photo_d);     
                    $photopath = "img/". $photo_d;
                    move_uploaded_file($_FILES['photo_d']['tmp_name'], $photopath);
                    redirect('applic/lichcab');     
                }
                }
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
     