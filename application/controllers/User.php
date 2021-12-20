<?php

    class User extends MY_Controller
    {
        public function index()
        {
            // to load helper
            // $this->load->helper('url');

            // to load view 
            $this->load->model('Usermodel');
            $articledetail['detail'] = $this->Usermodel->articledetails();
            $this->load->view('users/Articlelist',$articledetail); 

            
        }
    }

?>