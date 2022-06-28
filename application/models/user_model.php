<?php 


	class User_model extends CI_Model
	{
		
		public function get_user()
		{
			$this->db->select()->from('user');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function create_user()
		{

			$data = array(

					'name' => $this->input->post('name'), 
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
					);

		    		$this->db->insert('user', $data);
		}

		public function update_data(){

		 if(isset($_REQUEST['uid'])){

			$uid=$_REQUEST['uid'];

			  $query="SELECT * FROM user WHERE id='$uid'";
			  $db=$this->db->query($query);
			  $result=$db->result();
			  return $result;

			  }//if condition end here//
			}

		public function update_user(){

			  $uid=$_REQUEST['uid'];
			  $data=array(
			      'name' => $this->input->post('name'), 
				  'phone' => $this->input->post('phone'),
				  'email' => $this->input->post('email'),
				  'password' => $this->input->post('password')
				   );

			if(

			  $this->input->post('update' )== true)
			{

			  $this->db->WHERE('id',$uid);
			  $this->db->update('user',$data);
			  echo 
		        "<script LANGUAGE='JavaScript'>
		         alert('Successfully Updated');
		         window.location.href='all_user';
		         </script>";
			}
		}

	    public function del(){

			  $did=$_REQUEST['did'];

			  $query="DELETE FROM user WHERE id='$did'";
			  $this->db->query($query);
			   echo 
		        "<script LANGUAGE='JavaScript'>
		         alert('Successfully Deleted');
		         window.location.href='all_user';
		         </script>";
			  

}

	}





 ?>