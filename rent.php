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
        <h1>
          <?php
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $pickup =  date("Y-m-d", strtotime($_POST['pickup']));
            $return =  date("Y-m-d", strtotime($_POST['return']));
            $carname = $_POST['carname'];
            
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "rental";
            $tablename = "booking";
            
            $dbase = new mysqli($hostname, $username, $password, $dbname);

            if ($dbase->connect_error) {
              echo "Failed to connect to the database";
            }
            
            $query = "INSERT INTO $tablename VALUES ('$name', '$mobile', '$pickup', '$return', '$carname');";
            $dbase->query($query);

            if ($dbase->affected_rows < 1) {
              echo "reservation unsuccessfull";
            } else {
              echo "Succefully reserved <span>$carname</span> for <span>$name</span>";
            }
          ?>
        </h1>
    </div>
  </section>
</body>

</html>
