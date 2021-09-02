<!-- ***** Preloader Start *****
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->
    <style>
      a{
        color: white;
        font-weight: bold;
      }
      .logout{
        background-color: transparent;
        border:0;
        color:white;
        padding-bottom: 5px;
        }
      .login:hover,.logout:hover{
        cursor: pointer;
        padding-bottom: 5px;
        color: #f33f3f !important;
        border-bottom: 3px solid #f33f3f;
      }
    </style>

    <!-- Header -->
     <header class=""> 
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- <a class="navbar-brand" href="index.php"><h2>Online Store <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <div class="" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/laravel/new_project/public/userindex">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="http://localhost/laravel/new_project/public/proudects">Products</a></li>

               
                
                <li class="nav-item"><a class="nav-link" href="order_process.php">Checkout</a></li>

                <li class="nav-item"><a class="nav-link" href="http://localhost/laravel/new_project/public/contact-us">Contact Us</a></li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="http://localhost/laravel/new_project/public/about-us">about Us</a>
                      <a class="dropdown-item" href="http://localhost/laravel/new_project/public/blog">blog</a>
                      <a class="dropdown-item" href="http://localhost/laravel/new_project/public/testimonials">Testimonials</a>
                      <a class="dropdown-item" href="http://localhost/laravel/new_project/public/terms">Terms</a>
                    </div>
                </li>
            </ul>
          </div>

      <div div class="right-menu">
		<div class="header-search"></div>
					<span class="separator"></span>

          <?php 
          
            if (isset($_SESSION['username'])) {
              echo '<form action="logout.php" method="POST">
                  <button class="logout navbar-light mx-3" type="submit" name="submit">Logout</button>
              </form>';
              } else {
              echo '<a href="http://localhost/laravel/new_project/public/login" class="login navbar-light mx-3">login</a>
              ';
            }

          ?>

          <a href="http://localhost/laravel/new_project/public/register">registar</a>
          
        </div>
      </nav>
    </header> 