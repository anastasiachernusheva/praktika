<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{

    public function sel_category(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navadmin.php');
        $this->load->model('category_model');
        $data['cat'] = $this->category_model->select_category();
        $this->load->view('view_category.php',$data);
            }
            
            public function delete_category(){
                if (!empty($_GET)){
                    $id_category = $_GET['id_category'];
                    $this->load->model('category_model');
                    $this->category_model->delete_category($id_category);  
                    redirect('category/sel_category');  
                }
                
            }
            public function add_category(){
                if (!empty($_POST)){
                $name_category = $_POST['name_category'];
                $this->load->model('category_model');
                $this->category_model->ins_category($name_category);  
                redirect('category/sel_category');     

            }
            }
               



}