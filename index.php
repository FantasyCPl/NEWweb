<!DOCTYPE html>
<html>
<head>
    <link rel="preload" href="main.js" as="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick.min.js"></script>
    <script src="main.js"></script>

    <script src="slider.js"></script>

    <?php require 'db.php'; ?>

    <link rel="stylesheet" href="slick.css">
    <link rel="stylesheet" href="scss/main.css">
</head>
<nav class="nav" id="menu">
  <div class="wrap">
    <div class="brand">
      <a href="../index.php"><span>Home Page</span></a>
    </div>
      <button id="mobile-btn" class="hamburger-btn">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
    <ul class="top-menu" id="top-menu">
      <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="../index.php?filter=Teacher">Teacher</a></li>
      <li><a href="../index.php?filter=Director">Director</a></li>
      <li><a href="../index.php?filter=Student">Student</a></li>
    </ul>
  </div>
</nav>

<header class="hero">
  <div class="content">
    <p>Best university that you ever saw!</p>
  </div>
</header>

<main class="main">
  <section>
    <div class="tab-row">
      <div class="col-12">
        <h2>Regular Section</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptatum repudiandae aliquam, sit quasi ipsa! Quidem dolorum, sit beatae laboriosam error cupiditate veniam commodi, animi, asperiores consequuntur laborum. Quod, deleniti.</p>
      </div>
    </section>
    <section class="feature">
      <div class="tab-row">
        <div class="col-12">
        <a href="../Delete/delete.php"><span>Delete person</span></a> <a href="../Ad/ad.php"><span>Add person</span></a>
		<div class="wrapper">
			<div class="slider">



    <?php 
    if(isset($_GET['filter']))
    $filt =$_GET['filter'];
    else $filt = NULL;
    $person = get_person_all($filt);
    foreach($person as $p) : ?>
			<?php require 'header.php';?>
    <?php endforeach; ?>



		</div>
			
		</div>
      
        </div>
      </div>
  </section>
  <section>
    <div class="tab-row">
      <div class="col-4">
        
      </div> 
    </div>
  </section>
</main>

<footer class="footer">
    <div class="row">
      <div class="col-6">
        <p><i class="fa fa-phone" aria-hidden="true"></i> +44 (0)123 456 789</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> info@landingpage.com</p>
      </div>
      <div class="col-6" style="text-align: right;">
        <h3>Heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi a unde iste harum quis veritatis laudantium tempora, error veniam, incidunt?</p>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">&copy; 2017 Brand - <a href="#">Facebook</a> - <a href="#">Twitter</a></div>
    </div>
</footer>
</html>