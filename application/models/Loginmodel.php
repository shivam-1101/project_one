<?php

    class Loginmodel extends CI_Model
    {
        /**
         * @param string $username
         * @param string $password user entered password
         * 
         * @return boolean
         */
        public function validate($username, $password)
        {
            // 1. get the user by his username
            $userdetails = $this->db->where(['username'=>$username])->get('users')->row();

            // 2. verify the provided password with the password in db.
            if(password_verify($password, $userdetails->password)){
                return $userdetails->id;
            }else{
                return false;
            }
        }

        public function insert_data()
        {
            $data = [
                'username'=> $this->input->post('username'), 
                'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT), 
                'firstname'=> $this->input->post('firstname'), 
                'lastname'=> $this->input->post('lastname'),
                'email'=> $this->input->post('email')
            ];

            $this->db->insert('users',$data);
        }

        public function articledata()
        {
            $id = $this->session->userdata('id');
            $data = $this->db->select('article_tittle')
                            ->from('article')
                            ->where(['user_id'=>$id])
                            ->get();
            return $data->result();
        }

        public function addart($array)
        {
            $name = $array['title'];
            $body = $array['article'];
            $i = $this->session->userdata('id');

            $data = ['article_tittle'=>$name, 'article_body'=>$body, 'user_id'=>$i];

            return $this->db->insert('article', $data);
        }
    }
