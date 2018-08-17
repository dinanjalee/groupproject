<?php 

if(!($this->session->userdata('loggedin'))){

	redirect ('Home/login');

}

	if($this->session->flashdata('welcome')){

        echo "<h2>".$this->session->flashdata('welcome')."</h2>";

    }
    echo $this->session->userdata('fname'). " " . $this->session->userdata('lname'); ?>


    <a href="<?php echo base_url('index.php/Login/logoutUser'); ?>">Logout</a>