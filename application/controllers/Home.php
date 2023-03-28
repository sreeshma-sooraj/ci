<?php
class Home extends CI_Controller{
    public function index()
    {

        $data['main_view'] = "home_view";
        $this->load->view('layouts/main', $data);

       // echo" my first programe ";
       //$this->load->view('home_view');
    }
}
?>