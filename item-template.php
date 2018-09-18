<?php
  include('header.php');

  $nr = $_GET['numeris'];
  $item = getPreke($nr);
?>


<!-- start 1 conteiner -->
<div class="container-fluid">

  <!-- start 1 row -->
  <div class="row d-flex justify-content-center aukstis-626">

    <!-- start 1 column -->
    <div class="col-md-5 mt-4 d-flex justify-content-center">
      <div class="card" style="width: 40rem;">
        <img class="card-img-top" src=<?php echo $item['foto']; ?> alt="Card image cap">
        <div class="card-body text-center mt-5">
          <p class="card-title-2 font-weight-bold"> <?php echo $item['title']; ?> </p>
          <p class="card-text-2 pt-3"> <?php echo $item['price']; ?>&euro; </p>
        </div>
      </div>
    </div>
    <!-- end 1 column -->

    <div class="col-md-4 d-flex justify-content-center mt-5">
      <article>
        <p class="buy font-weight-bold mb-5" >Buy now!</p>
        <form class="d-flex justify-content-center" action="new-product.php" name="myFormQM" onsubmit="validateFormQM()" method="post">
            <div class="new-product">
              <input type="text" name="vardasPart" value="" class="form-control" required placeholder="Name Surname"> <br>
              <input type="email" name="pastasPart" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
              <input type="number" name="kiekis" value="" class="form-control" required placeholder="Quantity"> <br>
              <button type="submit" name="mygtukas" class="btn btn-outline-secondary new-product-add mb-3">Confirm purchase!</button>
            </div>
        </form>
      </article>
    </div>

  </div>
  <!-- end 1 row -->

</div>
<!-- end 1 conteiner -->


<?php
include('footer.php');
 ?>
