<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{

            public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav.php');
        $this->load->view('glav.php');
        $this->load->view('temp/footer.php');
            }}