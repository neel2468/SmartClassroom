<?php
include('login.php');
if ((isset($_SESSION['username']) && $_SESSION['username'] != ''))
	{
		header('Location: teacherhome.php');

	}
if ((isset($_SESSION['username1']) && $_SESSION['username1'] != '' ))
	{
		header('Location: studenthome.php');

	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SCLASS | Home</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">          
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Icon Library -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head> 
  <body> 
    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>SCLASS</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.html">Home</a></li>            
                      
            <li><a href="#1">About Us</a></li>
             <li><a href="#2">Features</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a id='myBtn11'>Teacher</a></li>                
                <li><a id='myBtn12'>Student</a></li>                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a id='myBtn21'>Student</a></li>                
                <li><a id='myBtn22'>Teacher</a></li>             
              </ul>
            </li>                         
         </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>

  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="img/slider/1.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To SCLASS</h4>
        <span></span>
        <h2>We Will Help You To Learn</h2>
        <p>Make your arduous task easy and simple.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="img/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Smart Way To Learn</h4>
        <span></span>
        <h2>Best Education You Achive</h2>
        <p>No more tedious works to do while lectures.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="img/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusively For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>Future begans from here!! .</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>Learn from any where using materials as well as able to watch miss out lectures and find out notes.</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Expert Teachers</h3>
              <p>Dabster are always here to help you during class.Meantime, student can able to ask doubts duing class. </p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Best Classrooms</h3>
              <p>Using modern technology students are able to experiance the current trend and able to take benefit of that. </p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->
  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2 id="1">About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Sclass are here with unique feature of classroom using the web application. Students can attend the class utilizing the laptops and make their work easier.</p>
                  <ul>
                    <li>Make work easy.</li>
                    <li>Class interactive</li>
                    <li>Student and teacher interaction</li>
                    <li>Easy to maintain Attendance.</li>
                    <li>Material for subjects.</li>
                  </ul>
           
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->
  
  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">0</h4>
                  <p>Subjects</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">0</h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4 class="counter">0</h4>
                  <p>Modern Lab</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">0</h4>
                  <p>Teachers</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2 id="2">Our Features</h2>
              <p>Some features of sclass which make work efficient and easy.</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Material Access</h4>
                    <p>Able to access material of realted coures from anywhere anyplace through just login with id.Contain all material related to the course.</p>
            
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Attendance</h4>
                    <p>Now no more problem of attendance!! With this feature faculty will easly able to mark attendance by number of connection attach with faculty.</p>
           
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Screen Sharing</h4>
                    <p>Share screen with students and show the notes as well as ppts.Faculty can cast the screen with the number of students which has connected with it.</p>
                
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Audio Lessons</h4>
                    <p>Get the audio lecture of class when you are absent.</p>
          
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Video Lessons</h4>
                    <p>Videos of lectures of faculty are available for students. They can access it from material.</p>
              
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Learning</h4>
                    <p>Learn using laptops, able to watch Ppts, Notes as well as videos during lecture.</p>
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Developers</h2>
             
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="img/teachers/teacher-01.jpg" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Dhruva Patel</h4>
                      <span>Computer Science And Engineer</span>
                      <p>Persuing B-tech in CSE. Currently in fourth year of parul university. Interested in music, latest technology.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="img/teachers/teacher-02.jpg" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Vidhi Mistry</h4>
                      <span>Computer Science And Engineer</span>
                      <p>Persuing B-tech in CSE. Currently in fourth year of parul university. Planning to go USA. Applied for Google.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="img/teachers/teacher-03.jpg" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Neel Patel</h4>
                      <span>Computer Science And Engineer</span>
                      <p>Persuing B-tech in CSE. Currently in fourth year of parul university. Technical person. Major interest in bulding application current working in mnc.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="img/teachers/teacher-04.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Faculty </h4>
                      <span>Professor</span>
                      <p>Working in Parul university as an MIS Co-ordinator.Major interest in Application and Software development.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our teacher -->

   <!-- Start testimonial -->
   <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>It gave a tremendous level of self-confidence, that through exploration and learning one could understand seemingly very complex things in one’s environment.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Steve Jobs</h4>
              
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Life is like riding a bicycle. To keep your balance you must keep moving.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Albert Einstein</h4>
                  
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Education is the manifestation of the perfection already in man.The secret of life is not enjoyment but education through experience.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="img/testimonial-3.jpg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Swami Vivekananda</h4>
    
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic updates</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Parul University</p>
                  <p>Phone: 9192092312 </p>
                  <p>Website: www.paruluniversity.com</p>
                  <p>Email: bond007@hotmail.com.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->

 
  </footer>
  <!-- End footer -->


  <!-- teacher reg -->
  <div id="myModal1" class="modal1">
        <div class="modal-content1">
            <div class="container1">
            <span class="close1">&times;</span>
							<form method="POST" action="">
 		<span class="login100-form-title p-b-34 p-t-27">
					Teacher	Registration
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Enter Name">
           
            <input class="input100" type="text" name="nm" required autosave="off" autocomplete="off" placeholder="Name" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter teacher id">
           
            <input class="input100" type="text" name="id" required autosave="off" autocomplete="off" placeholder="Teacher ID" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter email">
           
            <input class="input100" type="text" name="em" required autosave="off" autocomplete="off" placeholder="Email" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Subject">
           
           <input class="input100" type="text" name="sb1" required autosave="off" autocomplete="off" placeholder="Subject1" style="color:#fff">
           <span class="focus-input100"></span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Enter Subject">
           
           <input class="input100" type="text" name="sb2" required autosave="off" autocomplete="off" placeholder="Subject2" style="color:#fff">
           <span class="focus-input100"></span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Enter Subject">
           
           <input class="input100" type="text" name="sb3" required autosave="off" autocomplete="off" placeholder="Subject3" style="color:#fff">
           <span class="focus-input100"></span>
   </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Branch">
           
            <input class="input100" type="text" name="bn" required autosave="off" autocomplete="off" placeholder="Branch" required style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter password">
           
           <input class="input100" type="password" required name="pwd" placeholder="Password">
           <span class="focus-input100"></span>
         </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter college">
           
            <input class="input100" type="text" name="cl" required autosave="off" autocomplete="off" placeholder="College" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
	
          <div class="container-login100-form-btn">
             <input type="submit" class="login100-form-btn" value="Register" name="tregister" />
          </div>
      </form>
   </div>
 </div>
</div>

<!-- student reg -->
<div id="myModal2" class="modal2">
 <div class="modal-content2">
   <div class="container2">
   <span class="close2">&times;</span>
		 <form method="POST" action="">
 		<span class="login100-form-title p-b-34 p-t-27">
					Student	Register
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Enter Name">
           
            <input class="input100" type="text" name="nm1" required autosave="off" autocomplete="off" placeholder="Name" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter enrollment id">
           
            <input class="input100" type="text" name="id1" required autosave="off" autocomplete="off" placeholder="Enrollment ID" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter email">
           
            <input class="input100" type="text" name="em1" required autosave="off" autocomplete="off" placeholder="Email" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Sem">
           
            <input class="input100" type="text" name="sm" required autosave="off" autocomplete="off" placeholder="Sem" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Branch">
           
            <input class="input100" type="text" name="bn1" required autosave="off" autocomplete="off" placeholder="Branch" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Division">
           
            <input class="input100" type="text" name="dv" required autosave="off" autocomplete="off" placeholder="Division" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter college">
           
            <input class="input100" type="text" name="cl1" required autosave="off" autocomplete="off" placeholder="College" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
	
          <div class="container-login100-form-btn">
             <input type="submit" class="login100-form-btn" value="Register" name="sregister" />
          </div>
      </form>
   </div>
 </div>
</div>
<!-- student log -->
<div id="myModal3" class="modal3">
 <div class="modal-content3">
   <div class="container3">
   <span class="close3">&times;</span>
		<form method="POST" action=" ">
    <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Enter username">
           
            <input class="input100" type="text" name="nm2" required autosave="off" autocomplete="off" placeholder="Username" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
 		<div class="wrap-input100 validate-input" data-validate="Enter password">
           
						<input class="input100" type="password" required name="pwd2" placeholder="Password">
            <span class="focus-input100"></span>
          </div>
          <div class="container-login100-form-btn">
             <input type="submit" class="login100-form-btn" value="Login" name="slogin" />
					</div>
        </form>
   </div>
 </div>
</div>


<!-- teacher log -->
<div id="myModal4" class="modal4">
 <div class="modal-content4">
   <div class="container4">
   <span class="close4">&times;</span>
		<form method="POST" action="">
		<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Enter username">
           
            <input class="input100" type="text" name="nm3" required autosave="off" autocomplete="off" placeholder="Username" style="color:#fff">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Enter Division">
           
           <input class="input100" type="text" name="dv4" required autosave="off" autocomplete="off" placeholder="Division" style="color:#fff">
           <span class="focus-input100"></span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Enter Subject">
           
           <input class="input100" type="text" name="sb4" required autosave="off" autocomplete="off" placeholder="Subject" style="color:#fff">
           <span class="focus-input100"></span>
   </div>
		<div class="wrap-input100 validate-input" data-validate="Enter password">
           
						<input class="input100" required type="password" name="pwd3" placeholder="Password">
            <span class="focus-input100"></span>
          </div>
          <div class="container-login100-form-btn">
             <input type="submit" class="login100-form-btn" value="Login" name="tlogin" />
					</div>		</form>
   </div>
 </div>
</div>





<script>
var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("myBtn11");
var span1 = document.getElementsByClassName("close1")[0];
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn12");
var span2 = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn21");
var span3 = document.getElementsByClassName("close3")[0];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("myBtn22");
var span4 = document.getElementsByClassName("close4")[0];
btn4.onclick = function() {
    modal4.style.display = "block";
}
span4.onclick = function() {
    modal4.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
  </script>
  
    </body>
     <!-- jQuery library -->
  <script src="js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="js/waypoints.js"></script>
  <script type="text/javascript" src="js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="js/custom.js"></script>
    </html>