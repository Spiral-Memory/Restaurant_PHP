<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/cart-style.css">
  <link rel="stylesheet" href="css/row.css">
  <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;400;500&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <style>
    .form-cancel {
      display: inline;

    }

    .btn-more {
      margin: 10px 70px;
    }

  </style>
  <title>Order Success</title>
</head>

<body>

  <header class="header">

    <?php
      require 'components/_navbar.php';
    ?>
    <div class="empty-cart">
      <img src="images/tick.png" alt="Check" class="cart-img">
      <p class="cart-text">Ordered placed, It will be delivered shortly!</p>

      <div class="buttons">
        <a href="menu.php"> <button type="button" class="btn-more btn btn-success btn-lg ">Wanna Eat More ?
          </button></a>
        <form action="handle-cancel.php" method="POST" class="form-cancel">
          <button type="submit" class="btn-cancel btn btn-danger btn-lg ">Cancel Your Orders</button>
        </form>



      </div>
    </div>

  </header>

</body>

</html>