<?php
include('header.php');
 ?>



<!-- start 1 containeris -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-md-3 d-flex justify-content-center">
      <h5> PURCHASE LIST </h5>
    </div>
  </div>

  <!-- start 2 row -->
  <div class="row d-flex justify-content-center mb-1">
    <div class="col-md-9 d-flex justify-content-end">
      <form action="purchase-list-search.php" method="post">
        <input type="text" name="search" value="" placeholder="Search...">
        <input type="submit" name="" value="Go">
      </form>
    </div>
  </div>

  <!-- start 3 row -->
  <div class="row d-flex justify-content-center mb-1">
    <div class="col-md-9 d-flex justify-content-end">
      <form action="purchase-list-order-a.php" method="post">
        <input type="submit" name="" value="Order by Name A-Z">
      </form>
    </div>
  </div>

  <!-- start 4 row -->
  <div class="row d-flex justify-content-center">
    <div class="col-md-9 d-flex justify-content-end">
      <form action="purchase-list-order-d.php" method="post">
        <input type="submit" name="" value="Order by Name Z-A">
      </form>
    </div>
  </div>

    <!-- start 5 row -->
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-md-10 partneriu-produkcija">
<?php
$partneriai = getPartnersOrderD();
for ($i=0; $i < count($partneriai); $i++) {
  $partneriuProduktai = $partneriai[$i];
  include('template-category-purchase.php');
}
 ?>
    </div>
  </div>

</div>
<!-- end 1 containeris -->




<?php
  include('footer.php');
?>
