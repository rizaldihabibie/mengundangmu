<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
      
            $this->output->set_header('Last-Modified:'.gmdate('D,d M Y H:i:s').'GMT');
            $this->output->set_header('Cache-Control:no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control:post-check=0,pre-check=0',false);
            $this->output->set_header('Pragma: no-cache');
        
            $this->load->model('comment');               
    }

    public function index()
    {
         $data['list'] = $this->comment->all();
        // $this->load->view('global_home/header_global_home');
       $this->load->view('v_home', $data);
        // $this->load->view('global_home/footer_global_home');

    }
}
