<?php

class Model_user extends CI_Model{

	function insertUserData(){
		/* insert data from registration form */
		$data = array(

			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),
			'contact' => $this->input->post('contact',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))


			);

		
		return $this->db->insert('customer',$data);

	}

	function insertRestaurantData(){
		/* insert data from registration form */
		$data1 = array(

			'restname' => $this->input->post('restname',TRUE),
			'address' => $this->input->post('address',TRUE),
			'town' => $this->input->post('town',TRUE),
			'restcontact' => $this->input->post('restcontact',TRUE),
			'restemail' => $this->input->post('restemail',TRUE),
			'name' => $this->input->post('name',TRUE),
			'position' => $this->input->post('position',TRUE),
			'contact' => $this->input->post('contact',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))


			);
		
		return $this->db->insert('restaurant',$data);

	}

	function loginUser(){
		/* check email , password in database 
			
			if exist -> session create
			else -> errors

		*/

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond = $this->db->get('customer');

		if ($respond->num_rows()==1) {

			return $respond->row(0);
			die();
			
		}
		else{
			return false;
		}
		


	}
	function insertMessage(){
		/* insert data from registration form */
		$data = array(

			'name' => $this->input->post('name',TRUE),
			'phone' => $this->input->post('phone',TRUE),
			
			'email' => $this->input->post('email',TRUE),
			'message' => $this->input->post('message',TRUE),


			);

		
		return $this->db->insert('contact',$data);

	}


}
