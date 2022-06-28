<?php 


	class App extends CI_Model
	{
		function para()
		{
			
			$query="SELECT * FROM application WHERE table_id='1'";
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function emp_hst($id)
		{
			
			$query='SELECT * FROM employment_history WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function acc_record($id)
		{
			
			$query='SELECT * FROM accident_record WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function traf_convi($id)
		{
			
			$query='SELECT * FROM traffic_convictions WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function dri_quali($id)
		{
			
			$query='SELECT * FROM driving_qualification WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function dri_exp($id)
		{
			
			$query='SELECT * FROM driving_experience WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		function dri_work($id)
		{
			
			$query='SELECT * FROM driver_work_hours_per_day WHERE application_id = \'' . $id . '\' ';
			$db=$this->db->query($query);
			$result=$db->result();
			return $result;
		}
		
	}

?>