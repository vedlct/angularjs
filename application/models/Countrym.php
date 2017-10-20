<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countrym extends CI_Model {


    public function getCountry(){
        $this->db->select('name,country');
        $this->db->from('country');
        $query = $this->db->get();
        return $query->result();
    }
}