<?php
require('config.php');
require('functions.php');
require('header.php');

?>

<main class="container">

<div class="row justify-content-md-center py-2">
    <div class="col-md-auto">
      <?php menu($bg = 'light',$type = 'media',$shadow = false, $logo = 'both');?>
    </div>  
  </div>

  <!-- Watch Now -->

  <div class="row py-5">

    <div class="col-md-auto fixed-bottom">

      <div class="swiper-container swiper5">
        <div class="swiper-wrapper">

        <?php

          $x = 0;
          $dir = PATH_MOVIES;
          $x = listarArchivosSwiper($dir,"","",$x);

        ?>

        </div>
      </div> 

      <div class="py-4"></div>
    </div>

  </div>

</main><!-- /.container -->

<?php require('footer.php'); ?>