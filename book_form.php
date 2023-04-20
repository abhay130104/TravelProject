<?php

   $connection = mysqli_connect('localhost','root','','travel');
   if(isset($_POST['pt'])){
      $id = $_POST['ID'];
      $name = $_POST['name'];
      $sql2= "insert into payment_detail(p_id,name) values ('$id','$name')";
      mysqli_query($connection, $sql2);
      header('location:home.php');
   }

   if(isset($_POST['pay'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $request = " insert into book_detail(ID,name, email, phone, address, location, guests, arrivals, leaving) values('$id','$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      header('location:payment.php');
   }

   if(isset($_POST['rating'])){
      $id = $_POST['id'];
      $rating = $_POST['stars'];
      $sql2= "insert into rating_detail(ID,rating) values ('$id','$rating')";
      mysqli_query($connection, $sql2);
      header('location:home.php');
   }

   if(isset($_POST['total'])){
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $sql="SELECT Price from destination_detail where Destination='$location'";
      $result=mysqli_query($connection, $sql);

      while($row = mysqli_fetch_array($result))
      {
      echo $row['Price']*$guests ."  is the amount";
      echo "<br />";
      }

   }

   if(isset($_POST['addbutton'])){
      $destination= $_POST['dest'];
      $price= $_POST['price'];
      $sql2= "insert into destination_detail(Destination,Price) values ('$destination','$price')";
      mysqli_query($connection, $sql2);
      header('location:addservice.php');
   }

   if(isset($_POST['update'])){
      $destination= $_POST['dest'];
      $price= $_POST['updated_price'];
      $sql3= "update destination_detail set Price = '$price' where Destination= '$destination'" ;
      mysqli_query($connection, $sql3);
      header('location:changeprice.php');
   }

   if(isset($_POST['delete'])){
      $id= $_POST['Id'];
      $sql3= "delete from payment_detail where p_id= '$id'" ;
      mysqli_query($connection, $sql3);
      header('location:deleteservice.php');
   }

   if(isset($_POST['guide'])){

      $table="SELECT guide_id,name,place from guide_detail";
      $result2 = mysqli_query($connection,$table);
      echo "< table id='tb' >";
      echo "<tr><th>Guide ID</th> <th>Name</th> <th>Place</th>";
      while ($row1= mysqli_fetch_array($result2))
      {
         echo 
         "<tr><td>".$row1['guide_id']."</td><td>".$row1['name']."</td><td>".$row1['place']."</td></tr>";
      }
      echo "</table>";
   }

?>