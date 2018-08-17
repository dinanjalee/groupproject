<?php

class Registration extends CI_Controller{

    public function RestRegister(){


        $this->form_validation->set_rules('restname', 'Restaurant Name', 'required');
        $this->form_validation->set_rules('address', 'Restaurant Address', 'required');
        $this->form_validation->set_rules('town', 'Town', 'required');
        $this->form_validation->set_rules('restcontact', 'Contact No', 'required');
        $this->form_validation->set_rules('restemail', 'Restaurant Email', 'required|valid_email|is_unique[restaurant.email]');
        $this->form_validation->set_rules('name', 'Your Name', 'required');
        $this->form_validation->set_rules('position', 'Your Position', 'required');
        $this->form_validation->set_rules('contact', 'Your Contact', 'required');
        $this->form_validation->set_rules('email', 'Your Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('restReg.php');
                }
        else
                {
                        $this->load->model('Model_user');
                        $response = $this->Model_user->insertRestaurantData();

                        if($response){

                            $this->session->set_flashdata('msg', 'Registered Successfully...Please Login...');
                            redirect('Home/restReg'); 
                        }
                        else{
                            $this->session->set_flashdata('msg', 'Something went wrong...Plz try again...');
                            redirect('Home/restReg');
                        }


                }

    }

    public function UserRegister(){

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('contact', 'Contact No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('customerReg.php');
                }
        else
                {
                        $this->load->model('Model_user');
                        $response = $this->Model_user->insertUserData();

                        if($response){

                            $this->session->set_flashdata('msg', 'Registered Successfully...Please Login...');
                            redirect('Home/CustomerReg'); 
                        }
                        else{
                            $this->session->set_flashdata('msg', 'Something went wrong...Plz try again...');
                            redirect('Home/customerReg');
                        }


                }

    }


}