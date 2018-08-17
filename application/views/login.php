<?php include 'partials/header.php' ?>

<style>
  *{
    margin: 0px;
    padding: 0px;
    color: #fff;
  }

  .bg{
    background-image: url('<?php echo base_url();?>/assets/images/signup.jpg');
    background-size: 100% 100%;
    width: 100%; 
    height: 90vh;
  }
  .fm{
    border: 0px solid #fff;
    padding: 60px 60px;
    margin-left: 80px;
    margin-top: 90px;
    margin-bottom: 60px;
    -webkit-box-shadow: 2px 2px 36px 10px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 36px 10px rgba(0,0,0,0.75);
box-shadow: 2px 2px 36px 10px rgba(0,0,0,0.75);

  }

</style>


<div class="container bg">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 fm">

    <h2><b>Login</b></h2>

    <?php if($this->session->flashdata('errmsg')){

          echo "<small><b>".$this->session->flashdata('errmsg')."</b></small>";

        }

        ?>

    <hr>

    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/LoginUser'); ?>

    
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    
    <div class="checkbox">
      <label>
        <input type="checkbox" style="center"><b> Remember me</b>
      </label>
    </div>
      <button type="submit" class="btn btn-success btn-block"><b>Submit</b></button>
    
    <?php echo form_close(); ?>

    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>
<?php include 'partials/footer.php' ?>