<?php

    class Usermodel extends CI_Model
    {
        public function articledetails()
        {
            $data = $this->db->get('article');
            return $data->result();
        }

    }

?>