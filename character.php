<?php 
require ('connection.php');
if(isset($_GET["id"])){
    $person_id = $_GET["id"];
}
else{
    $person_id = 0;
}
    $query = "SELECT * FROM characters WHERE id = :id";
    $result = $conn->prepare($query);
    $result->bindParam(":id", $person_id);
    $result->execute();
    $person = $result->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character despriction</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
  
<header><h1><<?php echo $person["name"]; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $person["avatar"]; ?>">
            <div class="stats" style="background-color:<?php echo $person["color"];?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $person["health"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $person["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $person["defense"] ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $person["weapon"]; ?></li>
                    <li><b>Armor</b>: <?php echo $person["armor"]; ?> </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
               <?php echo $person["bio"];?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>

<footer>&copy; Joran Schrievers 2021</footer>
</body>
</html>