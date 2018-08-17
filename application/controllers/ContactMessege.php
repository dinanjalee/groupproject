<?php
public function UserRegister(){

        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        
        $this->form_validation->set_rules('message', 'Message', 'required');
        

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('contact.php');
                }
        else
                {
                        $this->load->model('Model_user');
                        $response = $this->Model_user->insertMessage();

                        if($response){

                            $this->session->set_flashdata('msg', 'Send Message Successfully...Thank you...');
                            redirect('Home/contact'); 
                        }
                        else{
                            $this->session->set_flashdata('msg', 'Something went wrong...Plz try again...');
                            redirect('Home/contact');
                        }


                }

    }