<?php
class Admin extends MY_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     if($this->session->userdata('id')){
    //         return $this->load->view('admin/dashboard');
    //     }
    // }

    public function index()
    {
        $this->load->view('admin/login');
    }
    
    public function loginvalid()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[13]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run()) {
            $usname = $this->input->post('username');
            $pass = $this->input->post('password');

            // echo "Username is ".$usname."<br>"." Password is ".$pass;
            $this->load->model('Loginmodel');
            $login_id = $this->Loginmodel->validate($usname, $pass);
            if ($login_id) {
                // $this->load->library('session');
                $this->session->set_userdata('id',$login_id);
                return redirect('admin/welcome');
            } else {
                $this->session->set_flashdata('login_failed','Invalid Username/Password');
                $this->load->view('admin/login');
                // return redirect('admin/login');

            }
        } else {
            $this->load->view('admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        // return $this->load->view('');
        return redirect('User');
    }

    public function register()
    {
        $this->load->view('admin/register');
    }

    public function registervalid()
    {
         $this->load->library('form_validation');
         $this->form_validation->set_rules('username', 'User Name', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
         $this->form_validation->set_rules('firstname', 'First Name', 'required');
         $this->form_validation->set_rules('lastname', 'Last Name', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
         $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
         if($this->form_validation->run()){
            $this->load->model('Loginmodel');
            $this->Loginmodel->insert_data();
         }
         else{
            $this->load->view('admin/register');
         }
    }

    public function welcome()
    {
        if(!$this->session->userdata('id'))
        return $this->load->view('admin/login');
        $this->load->model('Loginmodel');
        $articles['article'] = $this->Loginmodel->articledata();
        $this->load->view('admin/dashboard',$articles);

    }

    public function addarticle()
    {
        $this->load->view('admin/add_article');
    }

    public function articlevalidation()
    {
        $this->load->library('form_validation');
        if($this->form_validation->run('add_article_rules'))
        {
            // $uid = $this->input->post('user_id');
            // $uid = ;
            $post = $this->input->post();
            // $ar = array($uid,$post);

            $this->load->model('Loginmodel');
            if($this->Loginmodel->addart($post))
            {
                echo "data added";
            }
            else{echo "data not added";}
        }
        else{
            $this->load->view('admin/add_article');
        }
    }
}
