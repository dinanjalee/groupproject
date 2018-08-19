<?php include 'partials/header.php' ?>
  

<div class="row">
<div class="container" cs>
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url() ?>assets/images/slider/01.png" style="width:100%;">
        <div class="carousel-caption">
          <h3>Quality</h3>
          <p>Best in the town</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url() ?>assets/images/slider/02.png" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tasty</h3>
          <p>Companion of the taste buds</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url() ?>assets/images/slider/03.png" style="width:100%;">
        <div class="carousel-caption">
          <h3>Quickly</h3>
          <p>Reach out fast</p>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</div>


<div class="container">
<b><h3><font color="dodgerblue">
        Best Meal from your location</font> </h3></b>
    <h5 style="color:Gray;">
        <span class="sub header">
            MealMart is a customizable and easy to use restaurant food ordering marketplace platform .
You have to choose from multiple restaurant vendors > choose > menu according to your nutrient preference > place your order
        </span>
    </h5>
</div>


<div class="row" >
 <div class="col-lg-4" style="margin-left:500px;margin-top:50px;margin-bottom:50px">
    <div class="input-group">
     
      <input type="text" class="form-control" placeholder="Search for...">
       <span class="input-group-btn">
        <button class="btn btn-success" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>










<div class="container">

      <h1 class="my-4"></h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top ci" src="http://localhost/groupproject/assets/images/breakfast.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('index.php/Home/browse/breakfast'); ?>">Breackfast</a>
              </h4>
              <p class="card-text">The first meal of the day should provide you with healthy carbohydrates for energy, fiber to help you feel full, protein to assist in muscle growth and maintenance, and healthy fats for satiety. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top ci" src="http://localhost/groupproject/assets/images/lunch.jpg" alt=""></a>
            <div class="card-body">
              <b><h4 class="card-title">
                 <a href="<?= base_url('index.php/Home/browse/lunch'); ?>">Lunch</a>
              </h4></b>
              <p class="card-text">Healthy lunches and snacks are important for active children.Tips include fresh fruit, crunchy vegetables and a combination of protein, dairy and carbohydrate foods.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top ci" src="http://localhost/groupproject/assets/images/dinner.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('index.php/Home/browse/dinner'); ?>">Dinner</a>
              </h4>
              <p class="card-text">Nutritionally, dinner should be a light, well-portioned meal that is under 500 calories. Most people use dinner as their main source of food for the entire day and over indulge.</p>
            </div>
          </div>
        </div>        
      </div>
      <!-- /.row -->

      <h1 class="my-4"></h1>




      <!-- Features Section -->
      
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="<?php echo base_url() ?>index.php/Home/contact">Contact us</a>
        </div>
      </div>

    </div>

<?php include 'partials/footer.php' ?>