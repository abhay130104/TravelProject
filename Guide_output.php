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
   <style>

#mytable{
margin-left: 430px;
border: 2px solid black;
width: 70%;
margin:auto;
font-size:1.8rem;
text-align:center;
background-color:orange;
}

#mytable td,th
{
margin-left: 550px;
text-align:center;
border: 2px solid black;
background-color:pink;
}
#tb{
margin-left: 550px;
text-align:center;
border: 2px solid black;
background-color:white;
font-size:2.2rem;
}
#t{
margin-top: 100px;
margin-left: 480px;
text-align:center;
border: 2px solid black;
background-color:white;
font-size:4rem;
}
#tbd{
margin-top: 20px;
margin-left: 200px;
text-align:center;
border: 2px solid black;
background-color:white;
font-size:2rem;
}
#tbd2{
margin-top: 50px;
margin-left: 400px;
text-align:center;
border: 2px solid black;
background-color:white;
font-size:2rem;
}
</style> 
<?php

$connection = mysqli_connect('localhost','root','','travel');

if(isset($_POST['guide'])){
$table="SELECT guide_id,name,place from guide_detail";
$result2 = mysqli_query($connection,$table);

echo "<table id='tb'>";
echo "<tr><th>Guide ID</th> <th>Name</th> <th>Place</th>";
while ($row1= mysqli_fetch_array($result2))
{
   echo 
   "<tr><td>".$row1['guide_id']."</td><td>".$row1['name']."</td><td>".$row1['place']."</td></tr>";
}
echo "</table>";
}


// break
if(isset($_POST['all'])){
    $table="SELECT d.Destination, d.Price from destination_detail d, adventure_avail a where d.Destination=a.Destination and a.CampFire='Yes' and a.Camping='Yes' and a.OffRoad='Yes' and a.Trekking='Yes'";
    $result2 = mysqli_query($connection,$table);
    
    echo "<table id='tb'>";
    echo "<tr><th>Destination</th> <th>Price for One</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td></tr>";
    }
    echo "</table>";
    }

if(isset($_POST['trekking'])){
    $table2="SELECT d.Destination, d.Price, a.Trekking from destination_detail d, adventure_avail a where d.Destination=a.Destination and a.Trekking='Yes'";
    $result2 = mysqli_query($connection,$table2);
    
    echo "<table id='tb'>";
    echo "<tr><th>Destination</th> <th>Price for One</th> <th>Trekking</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td><td>".$row2['Trekking']."</td></tr>";
    }
    echo "</table>";
    }

    if(isset($_POST['campfire'])){
        $table="SELECT d.Destination, d.Price, a.CampFire from destination_detail d, adventure_avail a where d.Destination=a.Destination and a.CampFire='Yes'";
        $result2 = mysqli_query($connection,$table);
        
        echo "<table id='tb'>";
        echo "<tr><th>Destination</th> <th>Price for One</th> <th>CampFire</th>";
        while ($row2= mysqli_fetch_array($result2))
        {
           echo 
           "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td><td>".$row2['CampFire']."</td></tr>";
        }
        echo "</table>";
        }
        
    if(isset($_POST['offroad'])){
            $table="SELECT d.Destination, d.Price, a.OffRoad from destination_detail d, adventure_avail a where d.Destination=a.Destination and a.OffRoad='Yes'";
            $result2 = mysqli_query($connection,$table);
            
            echo "<table id='tb'>";
            echo "<tr><th>Destination</th> <th>Price for One</th> <th>OffRoad</th>";
            while ($row2= mysqli_fetch_array($result2))
            {
               echo 
               "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td><td>".$row2['OffRoad']."</td></tr>";
            }
            echo "</table>";
    }
    if(isset($_POST['camping'])){
                $table="SELECT d.Destination, d.Price, a.Camping from destination_detail d, adventure_avail a where d.Destination=a.Destination and a.Camping='Yes'";
                $result2 = mysqli_query($connection,$table);
                
                echo "<table id='tb'>";
                echo "<tr><th>Destination</th> <th>Price for One</th> <th>Camping</th>";
                while ($row2= mysqli_fetch_array($result2))
                {
                   echo 
                   "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td><td>".$row2['Camping']."</td></tr>";
                }
                echo "</table>";
    }

    if(isset($_POST['show'])){
        $table="SELECT * from book_detail";
        $result2 = mysqli_query($connection,$table);
        
        echo "<table id='tbd'>";
        echo "<tr><th>ID</th> <th>Name</th> <th>Email</th> <th>Phone</th> <th>Address</th> <th>Location</th> <th>Guests</th> <th>Arrivals</th> <th>Leaving</th>";
        while ($row2= mysqli_fetch_array($result2))
        {
           echo 
           "<tr><td>".$row2['ID']."</td><td>".$row2['name']."</td><td>".$row2['email']."</td><td>".$row2['phone']."</td><td>".$row2['address']."</td><td>".$row2['location'].
           "</td><td>".$row2['guests']."</td><td>".$row2['arrivals']."</td><td>".$row2['leaving']."</td></tr>";
        }
        echo "</table>"; 
        }

        if(isset($_POST['famous'])){
            $table="SELECT distinct(location),count(*) from book_detail group by location order by count(*) desc";
            $result2 = mysqli_query($connection,$table);
            
            echo "<table id='tb'>";     
            echo "<tr><th>Destination</th> <th>Total Count</th>";
            while ($row2= mysqli_fetch_array($result2))
            {
               echo 
               "<tr><td>".$row2['location']."</td><td>".$row2['count(*)']."</td></tr>";
            }
            echo "</table>";
            }
if(isset($_POST['exp'])){
        $table="SELECT Destination, Price from destination_detail where Price = (select max(Price) from destination_detail)";
        $result2 = mysqli_query($connection,$table);
        echo "<table id='t'>";
        echo "<tr><th>This is Most Exensive One</th> ";
        echo "</table>";
        echo "<br><br>";
        echo "<table id='tb'>";
        echo "<tr><th>&nbsp&nbsp&nbsp Destination &nbsp&nbsp&nbsp </th> <th>&nbsp&nbsp&nbspPrice &nbsp&nbsp&nbsp</th>";
        while ($row2= mysqli_fetch_array($result2))
        {
           echo 
           "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td></tr>";
        }
        echo "</table>";
}
if(isset($_POST['eco'])){
    $table="SELECT Destination, Price from destination_detail where Price = (select min(Price) from destination_detail)";
    $result2 = mysqli_query($connection,$table);
    echo "<table id='t'>";
    echo "<tr><th>This is Most Economical One</th> ";
    echo "</table>";
    echo "<br><br>";
    echo "<table id='tb'>";
    echo "<tr><th>&nbsp&nbsp&nbsp Destination &nbsp&nbsp&nbsp </th> <th>&nbsp&nbsp&nbspPrice &nbsp&nbsp&nbsp</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td></tr>";
    }
    echo "</table>";
}
if(isset($_POST['visited'])){
    $table="SELECT distinct(location),count(*) from book_detail group by location order by count(*) desc";
    $result2 = mysqli_query($connection,$table);
    echo "<table id='t'>";
    echo "<tr><th>&nbsp&nbspMost Popular Ones To Visit&nbsp&nbsp&nbsp</th> ";
    echo "</table>";
    echo "<br><br>";
    echo "<table id='tb'>";
    echo "<tr><th>&nbsp&nbsp&nbsp Destination &nbsp&nbsp&nbsp </th> <th>&nbsp&nbsp&nbspNo of Times Booked &nbsp&nbsp&nbsp</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['location']."</td><td>".$row2['count(*)']."</td></tr>";
    }
    echo "</table>";
}
if(isset($_POST['rt'])){
    $table="SELECT distinct(rating),count(*) from rating_detail group by rating order by count(*) desc";
    $result2 = mysqli_query($connection,$table);
    echo "<table id='t'>";
    echo "<tr><th>How People Rate us??</th> ";
    echo "</table>";
    echo "<br><br>";
    echo "<table id='tb'>";
    echo "<tr><th>&nbsp&nbsp&nbsp Rating &nbsp&nbsp&nbsp </th><th>&nbsp&nbsp&nbsp Frequency&nbsp&nbsp&nbsp</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['rating']."</td><td>".$row2['count(*)']."</td></tr>";
    }
    echo "</table>";
}
if(isset($_POST['dt'])){
    $table="SELECT d.Destination, d.Price, a.Trekking, a.CampFire,a.OffRoad,a.Camping from destination_detail d, adventure_avail a where d.Destination=a.Destination";
    $result2 = mysqli_query($connection,$table);
    echo "<table id='t'>";
    echo "<tr><th>Check out the Destinations??</th> ";
    echo "</table>";
    echo "<br><br>";
    echo "<table id='tbd2'>";
    echo "<tr><th>&nbsp Destination &nbsp&nbsp&nbsp </th><th>&nbsp Price&nbsp</th><th>&nbsp Trekking&nbsp</th><th>&nbsp CampFire&nbsp</th><th>&nbsp OffRoad&nbsp</th><th>&nbsp Camping&nbsp</th>";
    while ($row2= mysqli_fetch_array($result2))
    {
       echo 
       "<tr><td>".$row2['Destination']."</td><td>".$row2['Price']."</td><td>".$row2['Trekking']."</td><td>".$row2['CampFire']."</td><td>".$row2['OffRoad']."</td><td>".$row2['Camping']."</td></tr>";
    }
    echo "</table>";
}
?>
</head>
<body>
</body>
</html>