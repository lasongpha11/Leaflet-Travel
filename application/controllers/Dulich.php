<?php 
        
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dulich extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            //Load Dependencies
            $this->load->model('dulich_model');
            $this->load->model('tintuc_model');
        }
        // List all your items
        public function index( $offset = 0 )
        {
            $dl = $this->tintuc_model->get();
            $dulieu = array('dulieu' => $dl);

            $this->load->view('dulich_view',$dulieu,False);
            
        }
        // Add a new item
        public function add()
        {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $datepicker = $this->input->post('datepicker');
            $datepicker1 = $this->input->post('datepicker1');
            $khach = $this->input->post('khach');

            $mangdulieu = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'datepicker' => $datepicker,
                'datepicker1' => $datepicker1,
                'khach' => $khach,
            );
            if($this->dulich_model->insert($mangdulieu)) {
                $this->load->view('thanhcong');
            }
        }
        public function del( $id = NULL )
        {
            $mangid = array(
                'user_id' => $id,
            );
            if($this->dulich_model->delete($mangid)) {
                echo "Delete thanh cong";
            }
        }
        public function del_Tin( $id = NULL )
        {
            $mangid = array(
                'id' => $id,
            );
            if($this->tintuc_model->delete($mangid)) {
                echo "Delete thanh cong";
            }
        }
    }
?>