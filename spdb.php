<?php
    $conn = mysqli_connect("localhost","root","","sayft");
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
      if(!isset($_SESSION)) 
      { 
          session_start(); 
          $id=$_SESSION['user_id'];
          $email=$_SESSION['email'];
          
      }
      
     
      $query1="SELECT count(user.user_id) as totcount FROM user
      WHERE 
      user.account_type='Service Provider'
      AND user.email !='$email'
      ";
      $result1=mysqli_query($conn,$query1);
      
      $row=mysqli_num_rows($result1);
      
      $row=mysqli_fetch_array($result1);

    ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SAYFT</title><link rel="icon" href="assets/logo1.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amethysta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anaheim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Angkor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anonymous+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic+Didone">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arapey">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aref+Ruqaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arima+Madurai">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arizonia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arsenal">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Artifika">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asar">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asset">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Astloch">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asul">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atomic+Age">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aubrey">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/dh-highlight-left-right.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-9.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md shadow navigation-clean" style="background-color: rgb(237,14,0);color: rgb(255,255,255);opacity: 0.80;">
            <div class="container"><a class="navbar-brand" href="index.php" style="font-family: Asap, sans-serif;font-weight: normal;">SAYFT&nbsp;<i class="fa fa-calendar"></i>&nbsp;</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        
        
            <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                        <li></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="sprofileDash.php" style="color: rgb(255,255,255);font-family: Asap, sans-serif;">Back</i></a></li>
                    </ul>
        </nav>
    </div>
    <div class="row login-form">
        <div class="col-md-4 offset-md-4" style="padding-top: 131px;height: 837px;">
            <h2 class="text-center shadow-sm form-heading" style="font-family: Asap, sans-serif;font-weight: normal;color: rgb(240,62,51);"> Found Service Provider(s) (<?php echo $row['totcount'];?>)</h2>
            <?PHP
              
             
              
               
               // $type='Drinks';              

              $query="SELECT user.surname as surname,user.name as name,user.phone_number as numbers,user.email as email,location.stand_no as stano,
              location.street_name as sname,location.suburb as sub,location.city as city,location.province as prov
              FROM user,location
              WHERE
              user.user_id=location.user_id 
              AND 
              user.email !='$email'
              AND user.account_type='Service Provider'
             ";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
                ?>
            
            <form class="text-white border-white shadow custom-form" method="post">
                <div class="col">
                    <h1 style="font-size: 16px;font-family: Asap, sans-serif;color: rgb(240,62,51);font-style: italic;">List of Service Providers.</h1>
                    <hr style="background-color: #f03e33;">
                </div>

                <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
                <div class="table-responsive" style="font-family: Asap, sans-serif;font-size: 14px;">
                <table class="table table-sm">
                        <thead style="background-color: #f03e33;color: rgb(255,255,255);font-weight: normal;font-style: normal;">
                            <tr>
                                <th style="font-weight: normal;">Surname & Name :&nbsp;<?php echo $rows['surname'].' '. $rows['name'];?></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                                <td style="width: 710px;">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;<?php echo $rows['email'];?> 
                                <br>Phone Number &nbsp; &nbsp; : &nbsp; <?php echo $rows['numbers'];?>
                                <br>Stand No. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; <?php echo $rows['stano'];?>
                                <br>Street Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <?php echo $rows['sname'];?>
                                <br>Suburb &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <?php echo $rows['sub'];?>
                                <br>City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <?php echo $rows['city'];?>
                                <br>Province &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;: &nbsp; <?php echo $rows['prov'];?>
                              
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                   
                                   
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                  
                }
                ?>
            </form>
            <?php
              }else{
                ?>
                
                <?php
              } ?>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Swipe-Slider-9.js"></script>
</body>

</html>