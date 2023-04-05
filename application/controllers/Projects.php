<?php
class Projects extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){

            $this->session->set_flashdata('no_access', 'Sorry you are NOT allowed or not logged in it');
            //redirect('home/index');
        
          
            $data['main_view'] = "home_view";
           //$this->load->view('layouts/main', $data);
        }

    }

    public function index()
    {
        $data['projects'] = $this->project_model->get_projects();
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);

       // echo" my first programe ";
       //$this->load->view('home_view');
    }
    public function display($project_id)
    {
        $data['project_data'] = $this->project_model->get_project($project_id);
        $data['main_view'] = "projects/display";
        $this->load->view('layouts/main', $data);
  
    }
    public function create(){
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_body',  'Project Body', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $data['main_view'] = "projects/create_project";  
            $this->load->view('layouts/main', $data);
        }
        else{
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'), 
                'project_body' => $this->input->post('project_body')
               
      
            );

            if($this->project_model->create_project($data)){
                $this->session->set_flashdata('project_created','Your project has been created');
                $data['main_view'] = "projects/index";
                $this->load->view('layouts/main', $data);
            }
        }
    }

    public function edit($project_id){
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_body',  'Project Body', 'trim|required');
        if ($this->form_validation->run() == FALSE){

$data['project_data'] = $this->project_model->get_project_info($project_id);

            $data['main_view'] = "projects/edit_project";  
            $this->load->view('layouts/main', $data);
        }
        else{
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'), 
                'project_body' => $this->input->post('project_body')
               
      
            );

            if($this->project_model->edit_project($project_id, $data)){
                $this->session->set_flashdata('project_updated','Your project has been updated');
                $data['main_view'] = "projects/index";
                $this->load->view('layouts/main', $data);
            }
        }
    }
}


?>