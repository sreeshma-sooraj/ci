<?php
class User_model extends CI_Model{
    
    
    public function get_users($user_id,$username){
        $this->db->where(['id'=> $user_id,
        'username' => $username
    
    
    
      ]);
        $query = $this->db->get('users');
        return $query->result();














       // $this->db->where('id',$user_id);

       // $query =$this->db->query("SELECT * FROM users");
        //return $query->num_rows();//this give me the rows count
       // return $query->num_fields();//this give me the colum count
        //$query = $this->db->get('users');
       // return $query->result();
       
       // $config['hostname'] = "localhost";
      //  $config['username'] = "root";
      //  $config['password'] = "";
       // $config['database'] = "errand_db";

     

       // $config_2['hostname'] = "localhost";
       // $config_2['username'] = "root_2";
       // $config_2['password'] = "";
       // $config_2['database'] = "errand_db_2";

       // $connection = $this->load->database($config);
       // $connection_2 = $this->load->database($config_2);
    }
}
?>