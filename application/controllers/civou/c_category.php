<?php

class c_category extends CI_Controller {

    function loadAddCategory() {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('civou/view_addcategory');
        } else {
            $this->load->view('civou/view_login');
        }
    }
    function addCategory() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('categoryname', 'Category Name', 'required|trim|max_length[100]|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addcategory', $message);
//            $this->loadAddCategory();
        } else {
            $categoryname = $this->input->post('categoryname');
            if ($this->sitead->addcategory($categoryname)) {
                $message = array("mes" => "تم أضافة " . $categoryname . " .");
//                unset($this->input->post('categoryname'));
                $this->load->view('civou/view_addcategory', $message);
//                $this->loadAddCategory();
            } else {
                $message = array("mes" => "لقد حدثت مشكله فى الاضافه .");
                $this->load->view('civou/view_addcategory', $message);
//                $this->loadAddCategory($message);
            }
        }
    }

}

?>
