<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
    private $nama_controller = "Agama";
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('make_bread');
    }
    
    public function index()
    {

        $this->make_bread->add('E Surat', 'testing');
        $this->make_bread->add('Agama');
        $breadcrumb = $this->make_bread->output();
        $data['breadcrumb'] = $breadcrumb;

        $data['title'] = 'Home | E Surat';
        $data['title_content'] = $this->nama_controller;

        $data['title'] = $this->nama_controller." | "." E Surat";
        $data['content'] = 'Agama/index.php';
        $this->load->view('template', $data);
    }

}

/* End of file Agama.php */
