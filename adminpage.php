<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

   <script>

      function addFunction(){
         windows.location.href = "addservice.php";
   }
   </script>
   <style>
   .styled {
    height: 40px;
    width: 200px;
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(128, 0, 128, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
   
}

.styled:hover {
    background-color: rgba(128, 128, 128, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}

</style>

</head>
<body>
<section class="header">

   <a href="home.php" class="logo">Flavour of Travel</a>

   <nav class="navbar">
      <a href="home.php">LogOut</a>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
   </nav>
   </section>
   <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>Welcome Admin</h1>
</div>
   <section class="services">

   <h1 class="heading-title"> You can do </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt=""><br><br>
         <input class="styled" type="button" value="Add a Destination" name="add" onClick="location.href='addservice.php'"></input>
      </div>
      <div class="box">
         <img src="images/icon-2.png" alt=""><br><br>
         <input class="styled" type="button" value="Change Price of Package" name="changeprice" onClick="location.href='changeprice.php'"></input>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="styled" type="submit" value="Show all Bookings" name="show"></input>
         </form>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="styled" type="submit" value="Highly Booked Packages" name="famous"></input>
         </form>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt=""><br><br>
         <input class="styled" type="button" value="Delete a Record" name="delete" onClick="location.href='deleteservice.php'"></input>
      </div>

</section>

