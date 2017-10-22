<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countrym extends CI_Model {


    public function getCountry(){
        $this->db->select('id,name,country');
        $this->db->from('country');
        $query = $this->db->get();
        return $query->result();
    }


    public function editCountry($id){


        $this->db->select('name,country');
        $this->db->where('id',$id);
        $this->db->from('country');
        $query = $this->db->get();
        return $query->result();

    }
}