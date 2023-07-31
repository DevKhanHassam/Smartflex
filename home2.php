<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="original.css">
    <script src="trainerProfile.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #000000;
        font-family: 'Oswald', sans-serif;
        font-size: 30px;
	    text-decoration: none;
	    color:#ffffff;
	    font-weight: 700;
    } 
    nav a.navbar-brand{
        /* color:white;
        font-size: 30px!important;
        font-weight: 500; */

        font-size: 30px;
	    text-decoration: none;
	    color:#ffffff;
	    font-weight: 700;
    }

    button{
        background:grey;
    }
    button a{
        color: #c11325;
        font-weight: 500;
    }
    button a:hover{
        color:black
        text-decoration: none;
    }

    span{
        color: #c11325;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="index.html">Smart <span>Flex</span></a>

    <h4>Welcome <?php echo $fetch_info['name'] ?></h4>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    

    <!-- <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="index.html">Smart <span>Flex</span></a>
 	 	</div>
 	 	
 	 </div>
 </header> -->


   <!-- Start Training -->
   <section class="training-package" id="training">
	<div class="container">
		  <h2>Choose Trainer Profile for Session</h2>
		  <!-- <p class="title-p">Click on StartNow button to practice the  Pose you like </p> -->
		  <div class="content">
				<div class="box wow bounceInUp">
					  <div class="inner">
							 <div class="training-tag">
								   HASSAM KHAN
							 </div>
							 <div class="img">
								  <img src="images/trainerp1.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Hatha Yoga</p>
								   <p>Power Yoga</p>
								   
								   <!-- <a href="warrior1.html" class='btn1'>Start Now</a> -->
								  
							       <button class="btn" onclick="mondaysaturday()">Join</button>
									
								   
							 </div>
					  </div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					  <div class="inner">
							 <div class="training-tag">
								   SHAH MOIZ
							 </div>
							 <div class="img">
								  <img src="images/trainerp2.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Karma Yoga</p>
								   <p>Power Yoga</p>
								  
								   <!-- <a  href="" class="btn">Start Now</a> -->
								   <button class="btn" onclick="tuesdayfriday()">Join</button>
							 </div>
					  </div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					  <div class="inner">
							 <div class="training-tag">
								   HAMZA BIN ZAFER
							 </div>
							 <div class="img">
								  <img src="images/trainerp3.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Power Yoga</p>
								   <p>Hatha Yoga</p>
								   
								   <!-- <a href="garland.html" class="btn">Start Now</a> -->
								   <button class="btn" onclick="sundaywednesday()">Join</button>
							 </div>
					  </div>
				</div>
		  </div>
	</div>
</section>
<!-- End Training -->

   <!-- Start Training -->
   <section class="training-package" id="training">
	<div class="container">
		  <div class="content">
				<div class="box wow bounceInUp">
					  <div class="inner">
							 <div class="training-tag">
								   HASSAN AHMED
							 </div>
							 <div class="img">
								  <img src="images/trainerp4.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Karma Yoga</p>
								   <p>Power Yoga</p>
								   <
								   <!-- <a href="goddess.html" class="btn">Start Now</a> -->
								   <button class="btn" onclick="thursday()">Join</button>
							 </div>
					  </div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					  <div class="inner">
							 <div class="training-tag">
								   New Trainer 
							 </div>
							 <div class="img">
								  <img src="images/trainerp5.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Unknown.</p>
								   <p>Unknown</p>
								  
								   <!-- <a href="warrior2.html" class="btn">Start Now</a> -->
								   <button class="btn" onclick="tuesdayfriday()">Join</button>
							 </div>
					  </div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					  <div class="inner">
							 <div class="training-tag">
								   New Trainer
							 </div>
							 <div class="img">
								  <img src="images/trainerp6.png" alt="training" />
							 </div>
							 <div class="text">
								   <h3>Expertise</h3>
								   <p>Unknown</p>
								   <p>Unknown</p>
								  
								   <button class="btn" onclick="tuesdayfriday()">Join</button>
								   <!-- <a href="mountain.html" class="btn">Start Now</a> -->
							 </div>
					  </div>
				</div>
		  </div>
	</div>
</section>
<!-- End Training -->

 



 <!-- Start Contact -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box text wow slideInRight">
                 <h2>Get Connected with SmartFlex</h2>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span>Sir syed university, Karachi,</li>
                          <li><span class="fa fa-phone"></span>03433933374</li>
                          <li><span class="fa fa-envelope"></span>smartflex@outlook.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href=""><span class="fa fa-facebook"></span></a>
                       <a href=""><span class="fa fa-linkedin"></span></a>
                       <a href=""><span class="fa fa-skype"></span></a>
                       <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>

                  <div class="copy">
                      ProductBy &copy; Sir Syed University
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



 <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
    
</body>
</html>