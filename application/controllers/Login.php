<?php

class Login extends CI_Controller{

	public function LoginUser(){

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required' );


		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login.php');
                }

                else
        	{
        		$this->load->model('Model_user');
                        $result = $this->Model_user->loginUser();

                        if ($result != false){
                                //set session
                                $user_data = array(
                                        'user_id'=>$result->id,
                                        'fname'=>$result->fname,
                                        'lname'=>$result->lname,
                                        'contact' =>$result->contact,
                                        'email'=>$result->email,
                                        'loggedin'=>TRUE
                                );

                                 $this->session->set_userdata($user_data);
                                 $this->session->set_flashdata('welcome', 'welcome To MealMart..');
                                 redirect('Admin/index'); 

                        }
                        else{
                                $this->session->set_flashdata('errmsg', 'Wrong email or password ');
                                redirect('Home/login'); 
                        }

                       

        	}

	}

        public function LogoutUser(){

                $this->session->unset_userdata('user_id');
                $this->session->unset_userdata('fname');
                $this->session->unset_userdata('lname');
                $this->session->unset_userdata('contact');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('loggedin');

                redirect('Home/login');

        }

}