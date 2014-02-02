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
    <link href="includes/form.css" rel="stylesheet">
   
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
            <a class="dropdown-toggle" data-toggle="dropdown" href=
            "#">About<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="contact.php">Contact</a></li>
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
        <div class="col-lg-12">
          <div class="title">
            <h1 style="padding-top:5px;">Contact Us</h1>
          </div>
          <?php 
          $action=$_REQUEST['action']; 
          if ($action=="")  { 
            ?> 
            <form  action="" method="POST" enctype="multipart/form-data" id="FORM_1"> 
              <input type="hidden" name="action" value="submit">
              <div class="field">
                <input class="field" type="text" name="name" id="INPUT_4" class="required" placeholder="Name" />
              </div>
              <div class="field">
                <input type="text" name="email" id="INPUT_7" class="required email" placeholder="Email" />
              </div>
              <div class="field">
                <input type="text" name="subject" id="INPUT_10" class="required" placeholder="Subject" />
              </div>
              <div id="DIV_11">
                <textarea rows="20" cols="20" name="message" id="TEXTAREA_13" class="required" placeholder="Message"></textarea>
              </div>
              <button id="INPUT_14" type="submit">SEND</button>
            </form> 
            <?php 
          }  
          else { 
            $name=$_REQUEST['name']; 
            $email=$_REQUEST['email']; 
            $message=$_REQUEST['message'];
            $subject=$_REQUEST['subject']; 
            if (($name=="")||($email=="")||($message=="")) {
              echo "<h2>All fields are required, please fill the form again.</h2>"; 
            }
            if($subject=="") {
              $subject="UTSKPhi Contact Message"; 
            } 
            else {         
              $from="From: $name<$email>\r\nReturn-path: $email";
              mail("alpha.skphi@gmail.com", $subject, $message, $from); 
              $name="";
              $email="";
              $message="";
              $subject="";
              $action="";
              echo "<h2>Email sent!</h2>"; 
            } 
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
  <script src="includes/ready.js"></script>

</body>
</html>