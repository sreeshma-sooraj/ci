<?php
class Users extends CI_Controller{
public function show($user_id){


   // $this->load->model('user_model');
    $data['result'] = $this->user_model->get_users($user_id,'anu');
    $this->load->view('user_view',$data);
   // $data['welcome'] = " Welcome to my page";

   
   // foreach ($result as $object){
     //   echo $object->username . "<br>";
   // }

}

public function insert()
{
    $username = "kinku";
    $password = "kinku123";
    $this->user_model->create_users([

    'username' => $username,
    'password' => $password


  ]);
}

public function update()
{   
    $id = 3;
    $username = "shraavan";
    $password = "123s";
    $this->user_model->update_users([

    'username' => $username,
    'password' => $password


  ],$id);
}
public function delete()
{
  $id =3;
  $this->user_model->delete_users($id);
}
}
?>