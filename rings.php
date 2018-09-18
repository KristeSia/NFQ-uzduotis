<?php
  include('header.php');
?>


<!-- start 1 containeris -->
<div class="container-fluid mb-4">
  <!-- start 1 row -->
  <div class="row aukstis-50 d-flex align-items-center">
    <!-- start 1 column -->
    <div class="col-md">
      <h5>RINGS</h5>
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
        $rings = getRings();
        for ($i=0; $i < count($rings); $i++) {
          $oneRing = $rings[$i];
          include('template-category-rings.php');
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
          for($page=1;$page<=2;$page++) {
            echo '<a href="rings.php?page=' . $page . '"> ' . $page .' ... </a>';
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
