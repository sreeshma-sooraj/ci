<?php
class Projects extends CI_Controller{
    public function index()
    {

        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);

       // echo" my first programe ";
       //$this->load->view('home_view');
    }
}
?>