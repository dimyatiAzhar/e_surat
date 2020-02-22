<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kepolisian extends CI_Controller {
    private $nama_controller = "S.K.C.Kepolisian";
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('make_bread');
    }
    
    public function index()
    {

        $this->make_bread->add('E Surat', 'testing');
        $this->make_bread->add('S.K.C.Kepolisian');
        $breadcrumb = $this->make_bread->output();
        $data['breadcrumb'] = $breadcrumb;

        $data['title'] = 'Home | E Surat';
        $data['title_content'] = $this->nama_controller;

        $data['title'] = $this->nama_controller." | "." E Surat Dukuh Dempok";
        $data['content'] = 'kepolisian/index.php';
        $this->load->view('admin_sistem/template', $data);
    }

}

/* End of file Kepolisian.php */
