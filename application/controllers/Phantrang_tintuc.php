<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Phantrang_tintuc extends CI_Controller {
    	public $variable;
        public function __construct()
        {
            parent::__construct();
            $this->load->model('tintuc_model');
        } 
        public function index($offset = 0)
        {
            // tong so ban ghi
            $tongso = $this->tintuc_model->tatcadulieu();
            $sodulieutrong1trang = 2;

            $dl = $this->tintuc_model->get2(2, $offset);
            $dulieu = array('dulieu' => $dl);

            $this->load->library('pagination');
            
            $config['base_url'] = base_url() . 'phantrang_tintuc/index';
            $config['total_rows'] = $tongso;
            $config['per_page'] = $sodulieutrong1trang;
            $config['uri_segment'] = 0; // tu ban ghi so bn
            $config['num_links'] = 2;
            $config['full_tag_open'] = '<nav aria-label="Page navigation example" class ="text-center">
            <ul class="pagination phantrang"><div>';
            $config['full_tag_close'] = '</div></ul></nav>';
            $config['first_link'] = 'Trang dau';

            $config['first_tag_open'] = '<div>';
            $config['first_tag_close'] = '</div>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<div>';
            $config['last_tag_close'] = '</div>';
            $config['next_link'] = '&gt;';
            $config['next_tag_open'] = '<div>';
            $config['next_tag_close'] = '</div>';
            $config['prev_link'] = '&lt;';
            $config['prev_tag_open'] = '<div>';
            $config['prev_tag_close'] = '</div>';
            $config['cur_tag_open'] = '<b>';
            $config['cur_tag_close'] = '</b>';
            
            $this->pagination->initialize($config);
            $this->load->view('phantrang2_tintuc', $dulieu);
        }
        public function insert()
        {
    
        }
    
        //Update one item
        public function update( $id = NULL )
        {
    
        }
    
        //Delete one item
        public function delete( $id = NULL )
        {
    
        }
    
    }
    
    /* End of file Phantrang.php */
    
?>