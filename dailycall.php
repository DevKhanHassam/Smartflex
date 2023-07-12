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
<html>

<head>
    <script crossorigin src="https://unpkg.com/@daily-co/daily-js"></script>
    <script src="daily.js"></script>
  <title>SmartFlex | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="dailycall.css">
</head>

<body>
    <script>        
        callFrame = window.DailyIframe.createFrame({
            showLeaveButton: true,
            iframeStyle: {
              position: 'fixed',
              width: '100%',
              height: '100%',
            },
          });
          callFrame.join({ url: 'https://smartflex.daily.co/myroomtest' });  
        </script>
  <!-- Start Header  -->
  <header>
    <div class="container">
      <div class="logo">
        <a href="index.html">Smart <span>Flex</span></a>
      </div>  
  </header>
  <!-- End Header  -->
    
</body>

</html>