<!DOCTYPE html>
<html>
  <head> 
    <!-- Meta Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- End -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      <!-- CSS -->
      <style >
        *{
     margin-bottom: 0px !important;
     }

    .navbar {
      padding: 0px;
    }

    #footer1 {
      margin-bottom: 0px !important;
      position: absolute;
      width: 100%;
    }

    .navbar-nav {
    float:none;
    margin:0 auto;
    text-align: center;
    
}
.nav-link {
  font-family: Open Sans; 
    font-size: 17px;
     font-style: normal; 
     font-variant: normal; 
     font-weight: 700;
     color:white !important;
}



.navbar-light .navbar-nav .nav-link:hover {
  color: purple !important;
}

    </style>

    <!-- End Css -->

    <title>Beautify Me</title>

  </head>
  <body>
    <div id="navigation">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: cyan">
        <a class="navbar-left" href="#"><img src="cosmeticss.jpg" width="115px" height="85" 
        ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://lampservkev.centralus.cloudapp.azure.com/Module_03/project/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Beauty Supplies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Speak With A Beautician</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://lampservkev.centralus.cloudapp.azure.com/Module_03/project/query.php">Query Database</a>
            </li>
            
        </div>
      </nav>
      </div>


<?php


$servername = "localhost";
$username = "";
$password = "";
$db_name = "beautify_me";


 try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?> <div class="container">
  <div class="row">
    <div class="col-12 text-center">
    <?php 
    try {
    $sql = "SELECT * FROM customer";
    $customer = $conn -> query($sql);
    foreach ($customer as $row) {
    print  'ID: '. $row['id'] . "<br/>" . "Name: ". $row['name'] . "<br/> " .
     "Telephone: " . $row['tel'] ."<br/>"  . $row['email'] . "<br/>";

    }
    $conn = null; 
}
    catch (PDOexception $e) {
        echo "Error is: " . $e-> etmessage();
    }
 ?> 
  </div>
</div>
</div> 

<footer class="footer" id="footer1" style="margin-top: 50px;">
            <h6 class="text-center" style="background-color: cyan; color: white; padding:30px; 
            font-family: Open Sans; font-size: 17px; font-style: normal; font-variant: normal; font-weight: 700;">
              &copy; 2019 Beautify Me</h6>
        </footer>
</body>
</html>