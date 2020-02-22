<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $nama_controller = "Home";
    public function __construct()
    {
        parent::__construct();
        $this->load->library('make_bread');
    }
    

    public function index()
    {
        $data['title'] = $this->nama_controller." | "." E Surat Dukuh Dempok";
        $data['title_content'] = $this->nama_controller;
     
        $this->make_bread->add('Home', 'testing');
        $this->make_bread->add('E Surat');
        $breadcrumb = $this->make_bread->output();
        $data['breadcrumb'] = $breadcrumb;
        
        $data['content'] = 'Home/index.php';
        $this->load->view('admin_sistem/template', $data);    
    }

}

/* End of file Home.php */
