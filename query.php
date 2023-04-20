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
.button {

    border: none;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background: orange;
    cursor: pointer;
    padding: 25px 80px;
    display: inline-block;
    margin: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 1000;
    position: relative;
    transition: all 0.3s;
}
.button-1 {
    border: 3px solid #fff;
    color: red;
    font-size: 16px;
  margin: 4px 2px;
}

.button-1a:hover,
.button-1a:active {
    color: black;
}
    
</style>

</head>
<body>
<section class="header">

   <a href="home.php" class="logo">Flavour of Travel</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
   </nav>
   </section>
   <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>Welcome Admin</h1>
</div>

<div class="newbox">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <div>
        <h1>View Rating Table</h1>
         <input class="button button-1 button-1a" type="submit" value="Execute" name="ratetable"></input>
         </form>
</div>
<div class="newbox">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="button button-1 button-1a" type="submit" value="Execute" name="show"></input>
         </form>
</div>
<div class="newbox">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="button button-1 button-1a" type="submit" value="Execute" name="show"></input>
         </form>
</div>
<div class="newbox">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="button button-1 button-1a" type="submit" value="Execute" name="show"></input>
         </form>
</div>
<br><br>
<div class="newbox">
         <img src="images/icon-3.png" alt=""><br><br>
         <form action="Guide_output.php" method="post">
         <input class="button button-1 button-1a" type="submit" value="Execute" name="show"></input>
         </form>
</div>
</section>
</body>
</html>