<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login/login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <title>Being-Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">

        <!-- Header -->
        <header id="header">
          <div class="logo">
            <a href="index.html">Welcome</a>
          </div>
        </header>

        <!-- Banner -->
        <section class="main-banner">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="banner-content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="banner-caption">
                        <h4>welcome to <em>Being Us</em> Home Page</h4>
                        <span>A story tale &amp; from Us</span>
                        <p>Dimana semua yang ada di sini <strong> Being Us </strong>Dibuat Untuk menyimpan semua
                          <strong>Kenangan</strong> dan kegiatan yang kami lakukan bersama</p>
                        <div class="primary-button">
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Ganti foto sama text dibawah pake foto sama text dari database sql -->
        <!-- Top Image -->
        <section class="top-image">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <img src="assets/images/top-image.jpg" alt="">
                <div class="down-content">
                  <h4>Ante Interdum Chambray</h4>
                  <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar
                    toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony
                    pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master
                    cleanse chambray typewriter put a bird on it brooklyn forage.</p>
                  <div class="primary-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Left Image -->
        <section class="left-image">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <img src="assets/images/left-image.jpg" alt="">
              </div>
              <div class="col-md-6">
                <div class="right-content">
                  <h4>Ante Interdum Raclette</h4>
                  <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar
                    toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony
                    pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master
                    cleanse chambray typewriter put a bird on it brooklyn forage.<br><br>Air plant brunch food truck
                    vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally
                    humblebrag cloud bread vice master cleanse chambray typewriter put bird brooklyn</p>
                  <div class="primary-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Right Image -->
        <section class="right-image">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="left-content">
                  <h4>Ante Interdum Raclette</h4>
                  <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar
                    toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony
                    pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master
                    cleanse chambray typewriter put a bird on it brooklyn forage.<br><br>Air plant brunch food truck
                    vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally
                    humblebrag cloud bread vice master cleanse chambray typewriter put bird brooklyn</p>
                  <div class="primary-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <img src="assets/images/right-image.jpg" alt="">
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">

      <div class="inner">

        <!-- Search Box -->
        <section id="search" class="alt">
          <form method="get" action="#">
            <input type="text" name="search" id="search" placeholder="Search..." />
          </form>
        </section>

        <!-- Menu -->
        <nav id="menu">
          <ul>
            <li><a href="index.html">Homepage</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="base.html">Our Base!</a></li>
            <li>
              <span class="opener">Dropdown One</span>
              <ul>
                <li><a href="#">First Sub Menu</a></li>
                <li><a href="#">Second Sub Menu</a></li>
                <li><a href="#">Third Sub Menu</a></li>
              </ul>
            </li>
            <li>
              <span class="opener">Dropdown Two</span>
              <ul>
                <li><a href="#">Sub Menu #1</a></li>
                <li><a href="#">Sub Menu #2</a></li>
                <li><a href="#">Sub Menu #3</a></li>
              </ul>
            </li>
            <li><a href="https://www.google.com">External Link</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/transition.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


</body>

</html>