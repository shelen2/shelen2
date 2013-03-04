<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function index(){
        
        $this->profile();
        
    }
    ///////////////////
    function profile(){
         if ($this->session->userdata('logged_in')) {
             
			// print_r($this->session->userdata); 
			$id=$this->session->userdata('user_id');
			$this->load->model('site_model');
			if($this->site_model->select_user($id)){
				$user_data=$this->site_model->select_user($id);
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['country']=$user_data['country'];
				
				}
            $this->load->view('user_profile',$data);
            
        }else{
            redirect('site/index');
        }
        
        
    }
}

?>