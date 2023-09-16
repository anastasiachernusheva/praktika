<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{

     public function index(){
        $this->load->view('temp/header.php');
        $role = $this->session->userdata('role');
        if(!empty($role)){
        if($role =="Пользователь"){
            $this->load->view('temp/navuser.php');
                }
         if($role =="Админ"){
            $this->load->view('temp/navadmin.php');
                    }
        

         }
         else{
            $this->load->view('temp/nav.php');
         } 
         $id_zayavki = $this->uri->segment(3);
         $this->load->model('appication_model');       
         $data['zayavki'] = $this->appication_model->select_zayavki($id_zayavki);
         $this->load->model('category_model');
         $data['cat'] = $this->category_model->select_category();
        $this->load->view('glav.php',$data);        
        $this->load->view('temp/footer.php');
            }
        

            public function avtorizaciya(){
                $data['message'] = "";
                if(!empty($_POST)){
        
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $this->load->model('user_model');
                    $user = $this->user_model->avtoriz($login, $password);
        
                    if(!empty($user)){
                    $userdata = array(
                        'login' => $user['login'],
                        'id_user' => $user['id_user'],
                        'role' => $user['role'],
                    );
                    $this->session->set_userdata($userdata);
                    redirect('main/index');
                    }
                    else{
                        $data['message'] = " Не верный логин или пароль";
                }
                }
                $this->load->view('temp/header.php');
                $this->load->view('avtoriz.php',$data);
           
                    }
                    

                    public function registr(){
                        $this->load->view('temp/header.php');
                        $this->load->view('temp/nav.php');
                        $data['login'] ='';
                        $this->load->view('registr.php',$data);
                 }
                   
                 public function ins_user(){
                    if (!empty($_POST)){
                                $fio = $_POST['fio'];
                                $email = $_POST['email'];
                                $login = $_POST['login'];
                                $password = $_POST['pass'];
                                $this->load->model('user_model');
                                $data['login'] = $this->user_model->login($login);
                            //   var_dump($data['login']);
                                if(empty($data['login'])){
                               $this->user_model->ins_user($fio, $email, $login, $password); 
                                echo "Вы зарегистрированы";
                                }
                                else{
                                    echo "Такой логин уже есть".$data['login']['login'];
                            }
                        }
                          }
       
                        
                        public function destroy(){
                            $this->session->sess_destroy();
                            redirect('main/index');
                        }                        
                    }