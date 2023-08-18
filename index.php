<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ARIJIT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="Service.php">Services</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="About.php">About</a>
      </li>

      
      <li class="nav-item active">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      
    
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
      <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SO, It seems you have Arrived</h3>
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Lets get you Started</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Work, Work and Work</h3>
        
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


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Me</h2>
    </div>
    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/cc4.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">I AM ARIJIT</h2>
            <p class="py-3">So, technically this is just a demo website and its also my first PHP project so,
                i decided to make this website.I tried making it as much interactive and funny as possible 
                so that the users can make the most out of it and enjoy themselves.

            </p>
            <a href="About.php" class="btn btn-outline-success">Know more</a>
        </div>

      </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">My Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/cc5.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Bootstrap</h4>
    <p class="card-text">Styling</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/cc6.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">PHP</h4>
    <p class="card-text">ServerSide</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

            </div>


            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/cc7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">MySQL</h4>
    <p class="card-text">Database</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

            </div>




        </div>

    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">GALLERY

        </h2>
    </div>

    <div class="w-50 m-auto">
        <form action="UserInfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="User" class="form-control">
            </div>

            <div class="form-group">
                <label>Email ID</label>
                <input type="text" name="Email" class="form-control">
            </div>

            <div class="form-group">
                <label>Mobile number</label>
                <input type="text" name="Mobile" class="form-control">
            </div>

            <div class="form-group">
                <label>Comment</label>
                <input type="text" name="Comment" class="form-control">
                
            </div>
            <button type="Submit" class="btn btn-primary">Submit</button>




        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">
        arijitchakraborty691@gmail.com
    </p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
