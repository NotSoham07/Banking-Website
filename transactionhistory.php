<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: 0;
}

main {
  min-height: 100vh;
  background: linear-gradient(to right bottom, rgb(0, 0, 0), rgb(14, 0, 63));
  
  display: flex;
  align-items: center;
  justify-content: center;
}

.glass {
  background: white;
  height: 80vh;
  width: 70%;
  background: linear-gradient(
    to right bottom,
    rgba(0, 230, 118, 0.1),
    rgba(255, 255, 255, 0.05)
  );
  border-radius: 2rem;
  z-index: 3;
  backdrop-filter: blur(0.3rem);
  margin-top:100px;
  display: flex;
}

.circle1,
.circle2 {
  background: red;
  background: linear-gradient(
    to right bottom,
    rgba(42, 6, 172, 0.356),
    rgba(255, 255, 255, 0)
  );
  height: 15rem;
  width: 15rem;
  position: absolute;
  border-radius: 50%;
}

.circle1 {
  top: 5%;
  right: 15%;
}

.circle2 {
  bottom: 5%;
  left: 10%;
}
</style>
</head>

<body>

<?php
  include 'navbar.php';
?>
<main>
<section class="glass"> 

	<div class="container">
        <h2 style="font-family:poppins; color:#00E676;" class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table style="margin-top:30px; width:100%; border:0; cellspacing:0; cellpadding:0;  font-size:16px; class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color:white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody style="color:white;">
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</section>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>