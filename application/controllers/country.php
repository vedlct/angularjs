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

    public function editCountry($id){


        $data= $this->Countrym->editCountry($id);

       echo json_encode($data);
        //$this->load->view('testeditview',json_encode($data[0]));

    }
    public function viewedit($id){

        //print_r($id);
        $this->data['id']=$id;

        $this->load->view('newedit',$this->data);
    }


}
