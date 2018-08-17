<?php include 'partials/header.php' ?>

<style>

  *{
    margin: 0px;
    padding: 0px;
  }
  .bg{

    background-image: url('<?php echo base_url();?>/assets/images/newreg.jpg');
    background-size: 100% 100%;
    width:100%;
    height: 110vh;
  }
  .cn{
    margin-left: 100px;
  }

</style>


<div class="container bg">
  <div class="row cn">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 fm">

    <h2><b>Customer Registration</b></h2>
    <h4>Please enter your own details</h4>


    <?php if($this->session->flashdata('msg')){

      echo "<small><b>".$this->session->flashdata('msg')."</b></small>";

    }

    ?>


    <hr>

    <?php echo validation_errors(); ?>
    <?php echo form_open('Registration/UserRegister'); ?>

    
    <div class="form-group"10>
      <label for="exampleInputFirstName1">First Name:</label>
      <input type="text" class="form-control" id="exampleInputFirstName1" placeholder="First name" name="fname">
    </div>
    <div class="form-group">
      <label for="exampleInputLastName1">Last Name:</label>
      <input type="text" class="form-control" id="exampleInputEmailLastName1" placeholder="Last name" name="lname">
    </div>
    <div class="form-group">
      <label for="exampleInputContact1">Contact No:</label>
      <input type="text" class="form-control" id="exampleInputContact" placeholder="Contact no" name="contact">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confpassword">
    </div>
    
    <div class="checkbox">
      <label>
        <input type="checkbox" style="center"> Remember me
      </label>
    </div>
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    
    <?php echo form_close(); ?>

    </div>
  </div>

</div>
<?php include 'partials/footer.php' ?>