<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/menustyle.css">
  <link rel="stylesheet" href="css/row.css">
  <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;400;500&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Menu Items</title>
</head>

<body>

  <header class="header">

    <?php
      require 'components/_navbar.php';
    ?>

    <section class="section">
      <div class="row">
        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/pizza.jpg" alt="Pizza" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 399</span>
            <input type = "hidden" name = "i1" value = "Pizza">
            <button type="submit" class="btn-new">
              <img src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button>

            </form>
          

          </div>

        </div>

        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/dessert.jpg" alt="Dessert" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 221</span>
            <input type = "hidden" name = "i2" value = "Dessert">
            <button type="submit" class="btn-new"><img
                src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button></form>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/fries.jpg" alt="Fries" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 145</span>
            <input type = "hidden" name = "i3" value = "Fries">
            <button type="submit" class="btn-new"><img
                src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button></form>
          </div>
        </div>
      </div>

      </div>

      <div class="row">
        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/noodles.jpg" alt="Noodles" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 178</span>
            <input type = "hidden" name = "i4" value = "Noodles">
            <button type="submit" class="btn-new"><img
                src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button></form>

          </div>
        </div>
        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/ice-cream.jpg" alt="Ice-Cream" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 121</span>
            <input type = "hidden" name = "i5" value = "Ice-Cream">
            <button type="submit" class="btn-new"><img
                src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button></form>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="contain-items">
            <img src="images/items/burger.jpg" alt="Burger" class="img-items">
            <form action="handle-cart.php" method = "POST">
            <span class="price">Rs : 249</span>
            <input type = "hidden" name = "i6" value = "Burger">
            <button type="submit" class="btn-new"><img
                src="https://img.icons8.com/doodle/48/000000/wicker-basket.png" /></button></form>
          </div>
        </div>
      </div>

      </div>

    </section>



  </header>

</body>

</html>