<?php
  include('header.php');
?>


<!-- start 1 containeris -->
<div class="container-fluid mb-4">
  <!-- start 1 row -->
  <div class="row aukstis-50 d-flex align-items-center">
    <!-- start 1 column -->
    <div class="col-md">
      <h5>EARINGS</h5>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->
</div>
<!-- end 1 containeris -->


<!-- start 2 containeris -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row">
    <!-- start 1 column -->
    <div class="col-md">
      <?php
        $earings = getEarings();
        for ($i=0; $i < count($earings); $i++) {
          $oneEaring = $earings[$i];
          include('template-category-earings.php');
        }
      ?>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->
</div>
<!-- end 2 containeris -->




<?php
include('footer.php');
 ?>
