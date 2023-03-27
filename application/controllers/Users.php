<?php
class Users extends CI_Controller{
public function show(){


   // $this->load->model('user_model');
    $data['result'] = $this->user_model->get_users();
    $this->load->view('user_view',$data);
   // $data['welcome'] = " Welcome to my page";

   
   // foreach ($result as $object){
     //   echo $object->username . "<br>";
   // }

}
}
?>