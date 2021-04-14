<?php
  include('dbconn.php');
  if(isset($_REQUEST['sumbit'])){
    if(($_REQUEST['name'] == "")||($_REQUEST['subject'] == "")||($_REQUEST['email'] == "")||($_REQUEST['message'] == "")){
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Fill all fields</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      }else{
        $name=$_REQUEST['name'];
        $subject=$_REQUEST['subject'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        $sql="INSERT INTO `contanctus_db` (`name`, `subject`, `email`, `description`, `dt`) VALUES ('$name', '$subject', '$email', '$message', current_timestamp())";
      
        if( $conn->query($sql) == TRUE){ 
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Your entry has been submitted successfully!!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
         
      }else{  
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    }
      }
  }

?>

<div class="col-md-8">
        <form action="" method="POST">
          <input type="text" name="name" id="name" placeholder="Name" class="form-control"><br>
          <input type="text" name="subject" id="subject" placeholder="subject" class="form-control"><br>
          <input type="email" name="email" id="email" placeholder="Email" class="form-control"><br>
          <textarea class="form-control" name="message" id="message" placeholder="How can we help you"
            style="height: 150px;"></textarea><br>
          <button type="sumbit" class="btn btn-info my-4" name="sumbit" > Sumbit</button>
        </form>
</div>