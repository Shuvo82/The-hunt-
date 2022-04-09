<?php 
    require_once('../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $execute = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($execute);

         $first_name=$row['first_name'];
         $last_name=$row['last_name'];
         $user_name = $row['user_name'];
         $password = $row['pass'];
         $gender = $row['gender'];
         $address = $row['address'];
         $contact = $row['contact'];
         $email = $row['email'];
         $postal_code=$row['postal_code'];

//geting is finish



        

?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS link -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!--header class="header">
		<div class="section">
			<div class="header_container">
				<nav class="navbar">
					<h2 class="logo">
						<a href="#">
							<img src="../../images/logo.png" alt="">
						</a>
					</h2>
					<ul>
						<li><a href="../../index.html">Home</a></li>
						<li><a href="../job_seeker_login/index.html">Job seeker</a></li>
						<li><a href="../job_seeker_login/index.html">login</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header-->
<!-- End Header -->
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/job_hunt.svg">
		</div>
		<div class="wrapper">
      <div class="title">
        Profile update
      </div>
      <form class="form" action="updating_process.php" method="POST">
        
          <div class="inputfield">
             <label>First Name</label>
             <input type="text"  class="input" id="first_name" name="first_name" value="<?php echo $first_name ?>">
          </div>  
           <div class="inputfield">
             <label>Last Name</label>
             <input type="text" class="input" name="last_name" id="last_name" value="<?php echo $last_name ?>">
          </div>  
          <div class="inputfield">
           <label>User Name</label>
           <input type="text" class="input" name="user_name" id="user_name" value="<?php echo $user_name ?>">
        </div>
          <div class="inputfield">
             <label>Password</label>
             <input type="password" class="input" name="password" id="password" value="<?php echo $password ?>">
          </div>   
           <div class="inputfield">
             <label>Gender</label>
             <div class="custom_select">
               <select name="gender" id="gender" value="<?php echo $gender ?>">
                 <option value="male">Male</option>
                 <option value="female">Female</option>
               </select>
             </div>
          </div> 
           <div class="inputfield">
             <label>Email Address</label>
             <input type="text" class="input" name="email" id="email" value="<?php echo $email; ?>">
          </div> 
         <div class="inputfield">
             <label>Contact</label>
             <input type="text" class="input" name="contact" id="contact" value="<?php echo $contact; ?>">
          </div> 
         <div class="inputfield">
             <label>Address</label>
             <textarea class="textarea" name="address" id="address" value="<?php echo $address; ?>"><?php echo $address; ?></textarea>
          </div> 
         <div class="inputfield">
             <label>Postal Code</label>
             <input type="text" class="input" name="postal_code" id="postal_code" value="<?php echo $postal_code ?>">
          </div> 
         
          <!--
         <div class="inputfield">
           <input type="submit" value="Update" class="btn">
         </div>
         -->


         <br>
         <button type="submit" name="Update_cng" id="Update" class="btn">
          Save
        </button>



      </form>
      
  </div>
    </div>
</body>
</html>