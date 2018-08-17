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
		height: 140vh;
	}
	.cn{
		margin-left: 80px;
	}

</style>


	<div class="container bg">
  		<div class="row cn">
  			<div class="col-md-11">
    		
      		

    		<h3><b>Restaurant Registration</b></h3>
    		<h5>(Please Fill out necessary details below, and we'll be in touch.)</h5>


    		<?php if($this->session->flashdata('msg')){

      		echo "<small><b>".$this->session->flashdata('msg')."</b></small>";

    		}

    		?>


    		<hr>

    		<?php echo validation_errors(); ?>
    		<?php echo form_open('Registration/RestRegister'); ?>

    		<h4>Restaurant Details</h4>
    		<h1 class="my-4"></h1>
    
    		<div class="form-group row">
    			<label for="inputName" class="col-sm-2 col-form-label">Restaurant Name</label>
    			<div class="col-sm-8">
      				<input type="text" class="form-control" id="inputName" placeholder="what do we call this restaurant?" name="restname">
    			</div>
  			</div>

  			<div class="form-group row">
    			<label for="inputAddress" class="col-sm-2 col-form-label">Restaurant Address</label>
    			<div class="col-sm-8">
      				<textarea class="form-control" id="inputAddress" placeholder="where is the retaurant located?" name="address"></textarea>
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputTown" class="col-sm-2 col-form-label">Town</label>
    			<div class="col-sm-8">
      				<input type="text" class="form-control" id="inputTown" placeholder="what is the near by town/city?" name="town">
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputContact" class="col-sm-2 col-form-label">Contact No</label>
    			<div class="col-sm-8">
      				<input type="text" class="form-control" id="inputContact" placeholder="if you have the contact no of the restaurant. please enter here.." name="restcontact">
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputEmail1" class="col-sm-2 col-form-label">Restaurant Email</label>
    			<div class="col-sm-8">
      				<input type="email" class="form-control" id="inputEmail1" placeholder="eg: email@gmail.com" name="restemail">
    			</div>
  			</div>
    		
			<h4>Your Details</h4>
    		<h1 class="my-4"></h1>

    		<div class="form-group row">
    			<label for="inputName" class="col-sm-2 col-form-label">Your Name</label>
    			<div class="col-sm-8">
      				<input type="text" class="form-control" id="inputName" placeholder="what do we call you?" name="name">
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputposition" class="col-sm-2 col-form-label">Your relationship to this Restaurant</label>
    			<div class="col-sm-8">
      				<select class="form-control" name="position">
      					<option>Owner</option>
      					<option>Staff</option>
      				</select>
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputName" class="col-sm-2 col-form-label">Your Contact No</label>
    			<div class="col-sm-8">
      				<input type="text" class="form-control" id="inputContact" placeholder="what number can we contact you on?" name="contact">
    			</div>
  			</div>
    		
    		<div class="form-group row">
    			<label for="inputName" class="col-sm-2 col-form-label">Your Email</label>
    			<div class="col-sm-8">
      				<input type="email" class="form-control" id="inputName" placeholder="what do we call this restaurant" name="email">
    			</div>
  			</div>

  			<div class="form-group row">
      			<label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password:</label>
      			<div class="col-sm-8">
      				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter a password" name="password">
      			</div>
    		</div>
    
    		<div class="form-group row">
      			<label for="exampleInputPassword1" class="col-sm-2 col-form-label">Confirm Password:</label>
      			<div class="col-sm-8">
      				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="reenter password" name="confpassword">
      			</div>
    		</div>
    
    		<div class="checkbox" >
      			<label class="col-sm-2 col-form-label">
        			<input type="checkbox" style="center"> Remember me
      			</label>
    		</div>
        
      		<button type="submit" class="btn btn-success btn-block">Submit</button>
    
    		<?php echo form_close(); ?>

    		
  		</div>
	</div>
</div>



<?php include 'partials/footer.php' ?>