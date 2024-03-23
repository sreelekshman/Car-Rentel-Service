<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RentWheels</title>
  <!--link to css-->
  <link rel="stylesheet" href="style.css">
  <!-- box icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <!--header-->
  <header>
    <a href="index.html#" class="logo"><img src="Car Rentel Website Images/img/jeep.png" alt=""></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="index.html#home">Home</a></li>
      <li><a href="index.html#ride">Ride</a></li>
      <li><a href="index.html#services">Service</a></li>
      <li><a href="index.html#about">About</a></li>
      <li><a href="index.html#reviews">Reviews</a></li>
    </ul>
  </header>
  <!--home-->
  <section class="home" id="home">
    <div class="text">
        <?php
          $carname = $_GET['carname'];
          $monthlyrate = $_GET['monthlyrate'];
          $hourlyrate = $_GET['hourlyrate'];

        echo "
          <h1>
            <span>$carname</span><br>
            $monthlyrate /month<br>
            $hourlyrate /hour<br>
          </h1>
        ";
        ?>
    </div>

    <div class="form-container">
      <form action="rent.php" method="post">
        <div class="input-box">
          <span>Name</span>
          <input type="text" name="name" placeholder="name" required>
        </div>
        <div class="input-box">
          <span>Phone</span>
          <input type="number" name="mobile" placeholder="mobile number" required>
        </div>
        <div class="input-box">
          <span>Email</span>
          <input type="email" name="email" placeholder="email id" required>
        </div>
        <div class="input-box">
          <span>Pick-Up Date</span>
          <input type="date" name="pickup" required>
        </div>
        <div class="input-box">
          <span>Return Date</span>
          <input type="date" name="return" required>
        </div>
        <div style="display: none;">
          <span>Car</span>
          <input type="text" name="carname" value="<?php echo $_GET['carname']?>" readonly>
        </div>
        <input type="submit" class="btn">
      </form>
    </div>
  </section>
</body>

</html>
