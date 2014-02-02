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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<b class="caret"></b></a>
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
    <div class="container" >
      <div class="row">
        <div class="col-lg-12">
          <h1>What is Rush?</h1>
          <p class="description">Rush is when a fraternity or sorority "open their doors" and host a series of social events and meetings in order for members of the fraternity or sorority to get to know the students who are interested in joining their Greek organization. At the end of rush, the students that the Greek organization feel are the best fit to join them are given a "bid," which is a formal invitation to join a fraternity or sorority.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="placement grey"> 
    <div class="container" >
      <div class="row">
        <div class="col-lg-12">
          <h1>This Semester's Rush Events:</h1>
          <div class="rushevents">
              <?php
              $data = array();
              $handle = @fopen("rushevents.txt", "r");
              if ($handle) {
                while (($buffer = fgets($handle, 4096)) !== false) {
                  array_push($data, $buffer);
                }
                foreach ($data as $i) {
                  echo "<p>$i</p>";
                }
                unset($i);
                fclose($handle);
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="placement blue"> 
    <div class="container" >
      <div class="row">
        <div class="col-lg-12">
          <h1 style="color:white;">Recruitment Questionaire:</h1>
          <?php 
          $action=$_REQUEST['action']; 
          if ($action=="")  { 
            ?> 
            <form method="post" action="" id="FORM_1" style="padding-top:20px;" enctype="multipart/form-data">
              <input type="hidden" name="action" value="submit">
              <div class="field">
                <input type="text" name="name" id="INPUT_7" class="required" placeholder="Name" />
              </div>
              <div class="field">
                <input type="text" name="email" id="INPUT_7" class="required email" placeholder="Email" />
              </div>
              <div class="field">
                <input type="text" name="phone" id="INPUT_7" class="required" placeholder="Phone Number" />
              </div>
              <div class="field">
                <input type="text" name="hometown" id="INPUT_7" class="required " placeholder="Hometown" />
              </div>
              <div class="field">
                <input type="text" name="highschool" id="INPUT_7" class="required " placeholder="High School" />
              </div>
              <div class="field">
                <input type="text" name="gpa" id="INPUT_7" placeholder="High School/College GPA" />
              </div>
              <button id="INPUT_15" >SEND</button>
            </form> 
            <?php 
          }  
          else { 
            $name=$_REQUEST['name']; 
            $email=$_REQUEST['email']; 
            $phone=$_REQUEST['phone'];
            $hometown=$_REQUEST['hometown']; 
            $highschool=$_REQUEST['highschool']; 
            $gpa=$_REQUEST['gpa'];
            if ($name==""||$email==""||$phone==""||$hometown==""||$highschool=="") {
              echo "<h2 style='color:white'>All fields are required, please fill the form again.</h2>"; 
            }
            
            else {
              if($gpa=="") {
                $gpa="N/A";
              }
              $subject="UTSKPhi Recruitment Questionaire";     
              $from="From: $name<$email>\r\nReturn-path: $email";
              $message="Name: $name\nPhone: $phone\nHometown: $hometown\nHighschool: $highschool\nGpa: $gpa";
              mail("alpha.skphi@gmail.com", $subject, $message, $from); 
              $name=""; 
              $email="";
              $phone="";
              $hometown="";
              $highschool="";
              $gpa="";
              $action="";
              echo "<h2 style='color:white'>Email sent!</h2>"; 
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
  

</body></html>