<?php include 'partials/header.php' ?>

<style>

	*{
		margin: 0px;
		padding: 0px;
	}
	.bg{

		background-image: url('<?php echo base_url();?>/assets/images/reg.jpg');
		background-size: 100% 100%;
		width:100%;
		height: 90vh;
	}
	.text{
		width: 100%;
		margin-top: 185px;
		font-family: 'Georgia', Serif;
		text-align: center;
		color: black;
		font-weight: bold;

	}
	.text h1{
		font-size: 56px;
		font-weight: bold;
	}
	.text h4{
		text-transform: uppercase;
		font-size: 16px;
		font-weight: bold;
	}
	.text h2{
		font-weight: bold;
	}
	#buttonone{
		background-color: white;
		border: none;
		font-size: 13px;
		text-transform: uppercase;
		line-height: 35px;
		width: 200px;
		margin-top: 18px;
		border: 3px solid white;
		font-weight: bold;
		font-color: black;
	}

	#buttontwo{
		background-color: white;
		border: none;
		font-size: 13px;
		color: black;
		text-transform: uppercase;
		line-height: 35px;
		width: 200px;
		font-weight: bold;
		border: 3px solid white;
	}

</style>

<div class="container bg">
  <div class="text">
    <h4>...Lookig For Food...</h4>
    <h2>Feel The Difference</h2>
    <h1>Register To MealMart</h1>
    <button id="buttonone"><a href="<?php echo base_url() ?>index.php/Home/customerReg">Customer</a></button>
    <button id="buttontwo"><a href="<?php echo base_url() ?>index.php/Home/restReg">Restaurant</a></button>

  </div>
</div>
<?php include 'partials/footer.php' ?>