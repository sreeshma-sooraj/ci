<?php
class Home extends CI_Controller{
    public function index()
    {
       // echo" my first programe ";
       $this->load->view('home_view');
    }
}
?>