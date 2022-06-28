<?php 

	class Dashboard_model extends CI_model
	{

		function save_form($data)
		{	
			if(trim($data['fname']) && trim($data['lname'])) 
			{
				if($data['pwd'] != 'Mikoli88!')		
				{
					return array('code'=>0,'message'=>'You have entered a wrong password.');	
				}
				else
				{
					$this->db->trans_begin();		 
					$url	=	'https://jobs.paragonfreight.net/index.php/Main/index/'.(preg_replace("/[^a-zA-Z0-9]+/", "", strtolower(($this->db->escape_str( $data['fname'])))."-".strtolower(($this->db->escape_str( $data['lname'])))));


					$this->db->query(" insert into  application(be_fname,be_lname,be_app_type,be_valid_hours,be_link) values (".$this->db->escape( $data['fname']).",".$this->db->escape( $data['lname']).",'".$data['app_type']."','".$data['be_valid_hours']."', '".$url."') ");

                    $insert_id = $this->db->insert_id();
                    $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
                     $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
                      $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
                       $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
                        $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
                         $this->db->query(" INSERT INTO `employment_history` (`application_id`) values( $insert_id); ");
					$url = $url.'-'.$insert_id ;

					$this->db->query(' update application set be_link = \''.$url.'\' where table_id =  \''.$insert_id.'\' ');


					if ($this->db->trans_status() === FALSE)
					{	
						$this->db->trans_rollback();
						return array('code' => 0, 'message' => 'Soemthing went wrong!');
					}
					else
					{
						$this->db->trans_commit();
						return array('code' => 1, 'message' => 'Link has been generated!','url'=>$url);
					}
				}
			}
			else
			{
				return array('code'=>0,'message'=>'Parameters issue..');
			}
		}	
	}

?>