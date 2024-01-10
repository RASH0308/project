<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type= "text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TravelZone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/place1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>London</h3>
        <p>We had such a great time in London!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/place2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Rome</h3>
        <p>Thank you, Rome!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/place3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Maldives</h3>
        <p>We love the place!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class= "my-5"> 
<div class ="py-5">
<h2 class = "text-center" > About Us </h2>

</div>
<div class ="container-fluid">
<div class= "row">
<div class ="col-lg-6 col-md-6 col-12">
<img src="images/about2.jpg" class="img-fluid aboutimg">
</div>
<div class ="col-lg-6 col-md-6 col-12">
<h2 class="display-4"> Know about travel zone  </h2>
<p class = "py-3">Since 1975, TravelZone has been committed to bringing travelers the best in value and quality travel arrangements. 
We are passionate about travel and providing corporate travelers high-touch services to facilitate their business travel needs and sharing the worlds wonders 
on the leisure travel side.</p>
<a href ="about.php" class = "btn btn-success"> check more </a>

</div>
</div>
</div>

</section>

<section class= "my-5"> 
<div class ="py-5">
<h2 class = "text-center" > Our Services </h2>
</div>
               <div class ="container-fluid">
                  <div class= "row">
                 <div class = "col-lg-4 col-md-4 col-12">
                 <div class="card" >
         <img class="card-img-top" src="images/card1.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Virtual Reality</h4>
          <p class="card-text">By giving a 360-degree view of the different locations, 
          travel companies and agents can let customers explore the ground before booking and 
          increase the level of trust simultaneously..</p>
         <a href="#" class="btn btn-primary">view more</a>
          </div>
           </div>


             </div>
             <div class = "col-lg-4 col-md-4 col-12">
                 <div class="card" >
         <img class="card-img-top" src="images/card2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Augmented reality</h4>
          <p class="card-text">AR provides a virtual tour with a 3D view of reviews for nearby location, 
          Wi-Fi hotspots, real-time weather forecast and more.</p>
         <a href="#" class="btn btn-primary">view more</a>
          </div>
           </div>


             </div>
             <div class = "col-lg-4 col-md-4 col-12">
                 <div class="card" >
         <img class="card-img-top" src="images/card3.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Healthcare centre</h4>
          <p class="card-text">Providing the best service for any kind of emergency medical situation.</p>
         <a href="#" class="btn btn-primary">view more</a>
          </div>
           </div>


             </div>

          </div>

        </div>



</section>


<section class= "my-5"> 
<div class ="py-5">
<h2 class = "text-center" > Gallery </h2>
</div>
<div class="container-fluid">
                <div class="row">
              <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery1.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div> 
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery2.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery3.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery4.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery5.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery6.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery7.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery8.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             <div class ="col-lg-4 col-md-4 col-12">
              <img src ="images/gallery9.jpg" class ="img-fluid pb-3" width="500" height="200">
             </div>
             
             </div>

    </div>

</section>
<section class= "my-5"> 
<div class ="py-5">
<h2 class = "text-center" > Contact </h2>
</div>
<div class = "w-50 m-auto">  
<form action ="userinfo.php" method ="post" >

<div class ="form-group">
        <label> Username </label>
        <input type ="text" name ="user" autocomplete="off" class="form-control">
      </div>  

      <div class ="form-group">
        <label> Email Id </label>
        <input type ="text" name ="email" autocomplete="off" class="form-control">
      </div>  

      <div class ="form-group">
        <label> Mobile  </label>
        <input type ="text" name ="mobile" autocomplete="off" class="form-control">
      </div>  

      <div class ="form-group">
        <label> Comments </label>
        <textarea class= "form-control" name ="comments">
        </textarea>
      </div>  
      <button type ="summit" class="btn btn-success">Summit</button>
        
        
        </form>    
  
  
  </div>

</section>
  
<footer id="footer" class="fadeIn wow" data-wow-duration="0.8s"> 
<div class="socials">
                  <h3 class="text-black text-center">Get social</h3>
                  <ul class="p-3 bg-dark text-white text-center ">            
                                          <li class="facebook-icon"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
                                                              <li class="linkedin-icon"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fa fa-linkedin" aria-hidden="true"></i><span>LinkedIn</span></a></li>
                                                              <li class="twt-icon"><a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
                                                              <li class="twt-icon"><a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest" aria-hidden="true"></i><span>Pinterest</span></a></li>
                    
                                          <li class="twt-icon"><a href="https://www.instagram.com/" target="_blank" rel="noopener"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
                                                              <li class="twt-icon"><a href="https://www.youtube.com/" target="_blank" rel="noopener"><i class="fa fa-youtube" aria-hidden="true"></i><span>YouTube</span></a></li>
                                      </ul>
                </div>
                <div class="footer-center">
                              <div class="footer-right-top">
                  <h2>We've been where you want to go</h2>
                </div>
       
                <div class="footer-right-bottom">
                  <h3 class="p-3  text-center">Get in touch</h3>
                  <div class="footer-right-bottom-list">
                                          <div class="get-in-touch-item">
                        <div class="p-3 text-center">For business travel, call:</div>
                        <div class="p-3 text-center"><a href="tel:1-800-850-3886">1-800-850-3886</a></div>
                      </div>
                                          <div class="get-in-touch-item">
                        <div class="p-3 text-center">Or e-mail us at:</div>
                        <div class="p-3 text-center"><a href="tel:corporate@travelzone.com">corporate@travelzone.com</a></div>
                      </div>


    <p class ="p-3 bg-dark text-white text-center"> @travelzoneproduction</p>
    
    
    </footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>
</html>
