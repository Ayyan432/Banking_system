<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/view.css">
 <link rel="shortcut icon" href="image.png">
</head>
<body>
  <?php
include 'conf.php';
?>

              <?php
                include 'conf.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="<?php echo $rows['image'] ?>">
      <h3>NAME: <?php echo $rows['name'] ?></h3>
      <h4>EMAIL: <?php echo $rows['email'] ?></h4>
      <p>BALANCE: <?php echo $rows['balance'] ?></p>
      <a href="tranfermoney.php?id= <?php echo $rows['id'] ;?>" class="btn-1 outer-shadow hover-in-shadow">Transfer</a>
      <a href="userdetails.php?id= <?php echo $rows['id'] ;?>" class="btn-1 outer-shadow hover-in-shadow">Back</a>
    </div>
  </div>
</body>
</html>