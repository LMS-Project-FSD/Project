<?php
session_start();

@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   // Check if user already exists
   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists!';
   }else{
      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         // Insert user data into database
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         
         // Redirect to login page
         header('location:login_form.php');
      }
   }
}

if(isset($_POST['generate_otp'])){
   // Generate OTP
   $otp = mt_rand(1000, 9999);

   // Store OTP in session
   $_SESSION['otp'] = $otp;

   // Return generated OTP
   echo json_encode(['otp' => $otp]);
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/form.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">Job Seekers</option>
         <option value="admin">Job Recruiters</option>
      </select>
      <input type="text" id="otp" name="otp" placeholder="Enter OTP"><br>
      <button type="button" id="generate_otp" name="generate_otp" onclick="generateOTP()">Generate OTP</button><br>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      
      <p>Already have an account? <a href="login_form.php">Login Now</a></p>
   </form>
</div>

<script>
document.getElementById('generate_otp').addEventListener('click', function(){
   // Send request to generate OTP
   fetch('register.php', {
      method: 'POST',
      headers: {
         'Content-Type': 'application/json'
      },
      body: JSON.stringify({ generate_otp: true })
   })
   .then(response => response.json())
   .then(data => {
      // Display generated OTP
      document.getElementById('otp').value = data.otp;
   });
});
document.getElementById('generate_otp').addEventListener('click', function(){
   // Generate OTP
   const generatedOTP = Math.floor(1000 + Math.random() * 9000).toString();
   
   // Display generated OTP
   document.getElementById('otp').value = generatedOTP;
});
</script>

</body>
</html>
