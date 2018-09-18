<?php
  include('header.php');
?>


<!-- start 1 containeris -->
<div class="container-fluid mb-4">
  <!-- start 1 row -->
  <div class="row aukstis-50 d-flex align-items-center">
    <!-- start 1 column -->
    <div class="col-md">
      <h5>BRACELETS</h5>
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
        $bracelets = getBracelets();
        for ($i=0; $i < count($bracelets); $i++) {
          $oneBracelet = $bracelets[$i];
          include('template-category-bracelets.php');
        }
      ?>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->

<!-- start 2 row -->
  <div class="row mt-3">
    <div class="col-md d-flex justify-content-center">
      <p class="psl">
        <?php
        for($page=1;$page<=4;$page++) {
          echo '<a href="bracelets.php?page=' . $page . '"> ' . $page .' ... </a>';
        }
         ?>
      </p>
    </div>
  </div>

</div>
<!-- end 2 containeris -->


<?php
include('footer.php');
 ?>
