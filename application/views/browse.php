<?php include 'partials/header.php' ?>

<div class="container">

<b><h3 class="ui header"><font color="dodgerblue">Choose from the best restaurants</font> </h3></b>
<h5 style="color:Gray;">
        <span class="sub header">
            MealMart works with carefully selected restaurant partners, so we can deliver quality meals with consistent delivery times.


        </span>
    </h5>

<b><h3 class="ui header"><font color="dodgerblue"><?= $time?></font> </h3></b>
<h1 class="my-4"></h1>

 

      <?php foreach ($restaurants as $item): ?>

        <div class="col-md-2">
          <div class="thumbnail">
           
           
            <?php echo "<img src='" . base_url() . "assets/images/logo/" . $item->logo . "' alt='' style='heigt:186; width:271;'/>" ?>
            <b><h4 class="thumbnail-title" style="color:dodgerblue;" align="center">
              <a href="<?php echo base_url() ?>index.php/Home/tfc"><?= $item->restname; ?></a>
            </h4></b>
          </div>
        </div>

      <?php endforeach; ?>


</div>



<?php include 'partials/footer.php' ?>