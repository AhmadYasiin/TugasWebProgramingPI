<?php
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tentang Kita learninghtml</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/lightbox.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #000000; }
  #section2a {color: #000000; }
  #section2b {color: #000000; }
  #section3 {color: #000000; }
  
  @media screen and (max-width: 810px) {
    #section1, #section2a, #section2b, #section3 {
        margin-left: 0px;
    }
  }
/* scroll to top */
  #scroll { 
  position: relative; 
  width: 0px;
  margin: 0 auto;
  bottom: 15px; 
  right: 0;
  background: red;
  padding: 0;
}
  
#scroll a { 
  float: right;
  margin: 0 0 0 0; 
  padding: 0 0 0 0;
}
  
#scroll a img { 
  float: right;
  padding: 0 0 0 0;
  margin: 0;
}
input[type='search']{height:33px;width:250px;}
 button{padding:5px;width:60px;}
 i{color:#050;}
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="images/002.jpg" data-lightbox="example-1"> <img src="images/002.jpg" alt="Shouma" style="width:45px;height:26px;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>  
		<li class="active"><a href="#">Buku Tamu</a></li>		
        <li class="active"><a href="#">Tentang Kita</a></li> 
		<li><a href="tutorial.php">Tutorial</a></li>
        <li><a href="Hubungi kami.php">Hubungi Kami</a></li>
      </ul>
      
    </div>
  </div>
</nav> <br>

  
<div class="container">

        <div class="row">
 <br>
            <div class="col-md-8">
                <div>
                    <!-- Blog Entries Column -->
                  <h1 class="page-header">
                    Tentang Kita<br>
                    <small>-KitaTOp-</small>
                  </h1>
                </div>

                <div id="section1">
                        <!-- First Blog Post -->
                    
                      <a class="example-image-link" href="images/002.jpg" data-lightbox="example-1">
                        <img class="img-responsive" src="images/002.jpg" alt="Image" width="200" height="80">
                      </a>
                      
                    
                    <p>
                      Nama : Ahmad Yasiin <br>
                      Tempat/Tanggal Lahir : Semarang/13 februari 1995 <br>
                      Alamat : Semarang <br>
                      Kewarganegaraan : Indonesia <br>
                      Agama : Islam <br>
                      Status : Belum Menikah <br>
                      Jenis Kelamin : Laki - Laki <br>
                      
                    </p>
					
					<p>
                      Nama : Rio chandra <br>
                      Tempat/Tanggal Lahir : Kenda/25 November 1991 <br>
                      Alamat : Semarang <br>
                      Kewarganegaraan : Indonesia <br>
                      Agama : Islam <br>
                      Status : Belum Menikah <br>
                      Jenis Kelamin : Laki - Laki <br>
                    
					  </p>
					  
					  <p>
                      Nama : Ekpa neo<br>
                      Tempat/Tanggal Lahir : GROBOGAN/02 Juli 1995 <br>
                      Alamat : Semarang <br>
                      Kewarganegaraan : Indonesia <br>
                      Agama : Islam <br>
                      Status : Belum Menikah <br>
                      Jenis Kelamin : Laki - Laki <br>
                   
					  </p>
					  
                    <hr>
                    
                </div>
            </div>
<br>


</body>
</html>
