<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Sigma Kappa Phi - UT</title>

    <!-- Bootstrap core CSS -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="includes/bootstrap.css" rel="stylesheet">
    <link href="includes/sticky-footer-navbar.css" rel="stylesheet">
    <link href="includes/font-awesome.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet">
    <link href="includes/swipebox.css" rel="stylesheet">

</head>

<!-- Wrap all page content here -->
<body>
<div id="wrap">
    <!-- Fixed navbar -->

    <div class="container-fluid container-header">
    <header class="container" id="header">
      <a class="pull-left" href="index.html"><img alt="" src="images/symbol.jpg"></a>

      <nav class="pull-right" id="navigation">
        <ul class="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="rush.php">Rush</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="contact.html">Contact</a></li>
              <li><a href="officers.html">Officers</a></li>
              <li><a href="history.html">History</a></li>
            </ul>
          </li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="parents.html">Parents</a></li>
        </ul>
      </nav>
    </header>
  </div><!-- Begin page content -->
  <div class="placement"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12 img_gal">
          <?php
            $landscape = 0; 
            $portrait = 0; 
            $dir = 'images/large/landscape/';
            if ($handle = opendir($dir)) {
              while (($file = readdir($handle)) !== false){
                if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                  $landscape++;
              }
            }
            $dir = 'images/large/portrait/';
            if ($handle = opendir($dir)) {
              while (($file = readdir($handle)) !== false){
                if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                  $portrait++;
              }
            }
            for ($i=1; $i<= $landscape; $i++ ) {
              echo "<a href='images/large/landscape/$i.jpg' class='swipebox' title=''><img src='images/large/landscape/$i.jpg' class='smallpic1' alt='image'></a>";
            }
            echo "<br>";
            for ($i=1; $i<= $portrait; $i++ ) {
              echo "<a href='images/large/portrait/$i.jpg' class='swipebox' title=''><img src='images/large/portrait/$i.jpg' class='smallpic2' alt='image'></a>";
            }  
          ?>
        </div>
      </div>
    </div>
  </div>


</div>

<div id="footer">
  <div class="container" style="text-align:center">
    <ul class="footericons">
       <li><a href="https://www.facebook.com/SKPhi2007"><i class="fa fa-facebook fa-3x"></i></a></li>
        <li><a href="https://twitter.com/UT_SKPhi"><i class="fa fa-twitter fa-3x"></i></a></li>
    </ul>
  </div>

  <div class="container" id="site-info-footer">
    <p><span style="float:left;display:inline-block;">© Alpha Chapter of Sigma Kappa Phi, 2013.</span>
    <span style="float:right;display:inline-block;">Created by: <a href="http://yvescourtois.com/">Yves Courtois</a></span></p>
  </div>
</div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="includes/jquery-1.10.2.min.js"></script>
  <script src="includes/bootstrap.js"></script>
  <script src="includes/swipebox.js"></script>
  <script src="includes/ready.js"></script>


</body></html>