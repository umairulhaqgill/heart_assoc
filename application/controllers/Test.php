<?php 

  class Test extends CI_Controller
  {
  	
  	public function index()
  	
  	{

  		$this->load->model('app');
      
      $var['result']=$this->app->para();
      
      foreach ($var['result'] as $row) 
      {
        
        $row->employment_history = $this->app->emp_hst($row->table_id);
        $row->accident_record = $this->app->acc_record($row->table_id);
        $row->traffic_convictions = $this->app->traf_convi($row->table_id);
        $row->driving_qualification = $this->app->dri_quali($row->table_id);
        $row->driving_experience = $this->app->dri_exp($row->table_id);
        $row->driver_work_hours_per_day = $this->app->dri_work($row->table_id);

      }
      $this->load->view('test', $var);

      //echo '<pre>';
      //print_r($var);
      //echo '</pre>';

  	}

    public function generate()
    
    {

    $this->load->view('form');

    } 
    
    public function save_form()   
    {                      
        $this->load->model('Dashboard_model');                    
        $req  = $this->input->post();
        $data = $this->Dashboard_model->save_form($req);    
        header('Content-Type: application/json');
        echo json_encode($data);       
    }

  }
?>