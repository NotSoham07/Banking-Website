<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">    
<title>Maze Bank</title>

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
  
  
}

.glass {
  background: white;
  min-height: 80vh;
  width: 50%;
  background: linear-gradient(
    to right bottom,
    rgba(0, 230, 118, 0.1),
    rgba(255, 255, 255, 0.05)
  );
  z-index: 3;
  backdrop-filter: blur(0.3rem);
  position: absolute;
  margin-top:100px;
  right: 100px;
  display:flex;
  
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
  <h2 style="position: absolute; left:7%; font-family:sacramento; font-size:100px; color:#00E676;">Maze Bank</h2>
  <section class='glass'>
                <div style="margin-top:150px; margin-left:100px;" class="col-md act">
                    <img style="height:200px; width:200px;" src="img/transfer.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="margin-left: 15px; margin-top:30px; background-color:#00e676; color:black; border:none;">Make a Transaction</button></a>
                  </div>
                  <div style="margin-top:150px;" class="col-md act">
                    <img style="height:200px; width:200px;" src="img/history.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="margin-left: 15px; margin-top:30px; background-color:#00e676; color:black; border:none;">Transaction History</button></a>
                  </div>
      
  </section>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>