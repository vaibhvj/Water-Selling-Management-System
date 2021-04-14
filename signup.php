<?php
// connect database
include('dbconn.php');
//when press signup button
if(isset($_REQUEST['rsignup']))
{//checking empty fild
  if(($_REQUEST['rname'] == "")|| ($_REQUEST['remail'] == "")||($_REQUEST['rpassword']== ""))
  {
      $msg = '<div class="alert alert-warning mt-2" role="alert"> All fields are Required</div>';
    }
    else
    {//checking duplicate email
      $sql="SELECT r_email FROM sign_up_table WHERE r_email='".$_REQUEST['remail']."'";
      $result = $conn->query($sql);
      if($result->num_rows==1 )
      {
        $msg = '<div class="alert alert-warning mt-2" role="alert"> Email ID ALready Exits </div>';
      }
      else
      {
        $rname = $_REQUEST['rname'];
        $remail = $_REQUEST['remail'];
        $rpassword = $_REQUEST['rpassword'];
        $sql= "INSERT INTO `sign_up_table` (`r_name`, `r_email`, `r_password`) VALUES ('$rname', '$remail', '$rpassword')";
        if( $conn->query($sql) == TRUE)
        {
          $msg = '<div class="alert alert-success mt-2" role="alert"> Account Succesfully Created</div>';
        }
        else{
          $msg = '<div class="alert alert-danger mt-2" role="alert"> Unable to create account</div>';
        }
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- botstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="mt-5 mb-3 text-center ">
        <i class="fas fa-user-tie"></i>
        <span>Water Billing Managemnet System</span>
    </div>
    <p class="text-center"> 
        <i class="fas fa-user-secret text-danger"></i>Requester Area (Demo)
    </p>


<div class="container pt-2 bg-light " id="signup">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="shadow-lg p-4" method="POST">
        <div class="form-group mt-1">
          <i class="fas fa-user"></i>
          <label for="name" class="font-weight-bold pl-2">Name</label>
          <input type="text" name="rname" id="name" class="form-control" placeholder="Name" aria-describedby="helpId">
        </div>
        <div class="form-group mt-1">
          <i class="fas fa-user"></i>
          <label for="email" class="font-weight-bold pl-2">Email</label>
          <input type="email" name="remail" id="email" class="form-control" placeholder="Email"
          aria-describedby="helpId">
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mt-1">
          <i class="fas fa-key"></i>
          <label for="name" class="font-weight-bold pl-2">Password</label>
          <input type="password" name="rpassword" id="password" class="form-control" placeholder="Password"
          aria-describedby="helpId">
        </div>
        <div class="d-grid gap-2 mt-2">
          <button type="submit" class="btn btn-info shadow-sm font-weight-bold mt-3" name="rsignup">Sign Up</button>
          <em style="font-size: 10px;"> Note by clicking Sign up, you agree to our Terms, Data Policy and Cookie
            Policy </em>
          </div>
          <div class="text-center"> <a href="requester\login.php" class="btn btn-outline-dark mt-3 pb-1 font-weight-bold shadow-sm btn-sm">Log In</a></div>
          <?php if(isset($msg)){ echo $msg; } ?>
        </form>
        <div class="text-center"> <a href="index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm btn-sm"> Back to home</a></div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.js"></script>
  <script src="https://kit.fontawesome.com/fea99b3c70.js" crossorigin="anonymous"></script>

</body>

</html>