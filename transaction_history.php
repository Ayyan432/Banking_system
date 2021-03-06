<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="image.png">
    <title>Banking system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>

<body>
<?php
    include 'conf.php';
    $sql = "SELECT * FROM transact_history";
    $result = mysqli_query($conn,$sql);
?>
<div class="container1">

<div class="container">
            <h2 class="text-center pt-4" style="">Transaction History</h2>
        <a href="index.php" class="btn-1 outer-shadow hover-in-shadow button">Home</a>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                    <table class="table table-hover table-sm table-condensed table-bordered outer-shadow inner-shadow">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">sno</th>
                            <th scope="col" class="text-center py-2">sender</th>
                            <th scope="col" class="text-center py-2">receiver</th>
                            <th scope="col" class="text-center py-2">balance</th>
                            <th scope="col" class="text-center py-2">datetime</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr class="outer-shadow inner-shadow">
                        <td class="py-2"><?php echo $rows['sno'] ?></td>
                        <td class="py-2"><?php echo $rows['sender']?></td>
                        <td class="py-2"><?php echo $rows['receiver']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                         <td class="py-2"><?php echo $rows['datetime']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
     </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>