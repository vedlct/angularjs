<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class country extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Countrym');

    }
    public function index()
    {

        $this->load->view('country');

    }

    public function getCountry(){


        $data = $this->Countrym->getCountry();

         echo json_encode($data);
    }


}