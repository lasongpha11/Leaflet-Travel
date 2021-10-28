<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddTin extends CI_Controller {
	public $variable;
    public function __construct()
    {
        parent::__construct();
		$this->load->model('tintuc_model');
    } 
    public function index( $offset = 0)
    {
        $this->load->view('AddTin_v');
    }
    public function add()
    {
        $title = $this->input->post('title');
        $subtitle = $this->input->post('subtitle');
        $img = $this->input->post('img');
        $link = $this->input->post('link');

        $mangdulieu = array(
            'title' => $title,
            'subtitle' => $subtitle,
            'img' => $img,
            'link' => $link
        );
        if($this->tintuc_model->insert($mangdulieu)) {
            $this->load->view('thanhcong_tintuc');
        }
    }
}

