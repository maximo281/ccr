<?php

class User_model extends MY_Model {
    
    public function Works()
            {
                $listworks=$this->db->query('SELECT * FROM works');
                return $listworks;
            }
    public function get_services()
    {
        //$this->db->select('services');
        $query=$this->db->get('services');
        return $query->result();
    }
}
