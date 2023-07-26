<?php
// for this part of the code we will use php for the regristration -- use php to send the data from from to db
require_once('config.php');

// for signup nurse
if(isset($_POST['nurse_signup'])){
 
  //store signup name into variables
  $nurse_fname = $_POST['nurse_fname'];
  $nurse_lname = $_POST['nurse_lname'];
  $nurse_email = $_POST['nurse_email'];
  $nurse_phone = $_POST['nurse_phone'];
  $healthcare_center = $_POST['healthcare_center'];
  $nurse_password = $_POST['nurse_password'];
  $nurse_confirm_password = $_POST['nurse_confirm_password'];
  $nurse_password =password_hash($nurse_password, PASSWORD_DEFAULT);

  //check if this email address already exist for tbl nurse
  $sql = "SELECT * FROM nurse where nurse_email = '$nurse_email'";
      $query = $conn2 -> prepare($sql);
      $query->execute();
      // $results=$query->fetchAll(PDO::FETCH_OBJ);

      $count = $query->rowCount();
      if($count > 0)
      {
        //if count is greater than 0, it means this email address already exisit in database
        echo "<script>alert('Already existed')</script>";
      }
      else {
        // insert the form values into the tbl nurse
           $stmt = $conn2->prepare("INSERT INTO  nurse (nurse_fname, nurse_lname, nurse_email, nurse_phone, healthcare_center, nurse_password, nurse_confirm_password) VALUES
           (:nurse_fname, :nurse_lname, :nurse_email, :nurse_phone, :healthcare_center, :nurse_password, :nurse_confirm_password)");

            //use bind parameter to secure to inputs value going into the database
             $stmt->bindParam(':nurse_fname', $nurse_fname, PDO::PARAM_STR);
             $stmt->bindParam(':nurse_lname', $nurse_lname, PDO::PARAM_STR);
             $stmt->bindParam(':nurse_email', $nurse_email, PDO::PARAM_STR);
             $stmt->bindParam(':nurse_phone', $nurse_phone, PDO::PARAM_STR);
             $stmt->bindParam(':healthcare_center', $healthcare_center, PDO::PARAM_STR);
             $stmt->bindParam(':nurse_password', $nurse_password, PDO::PARAM_STR);
             $stmt->bindParam(':nurse_confirm_password', $nurse_confirm_password, PDO::PARAM_STR);
             //execute the query
             $stmt->execute();
      }

}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['login']))
{
// Getting username/ email and password for nurse to login
$nurse_email=$_POST['nurse_email_login'];
$nurse_password=$_POST['nurse_password_login'];

// Fetch data from database on the basis of username/email and password
//sql to check if this nurse email address has already created an account
$sql ="SELECT * FROM nurse
WHERE (nurse_email=:nurse_email)";
    $query=  $conn2 -> prepare($sql);
    $query-> bindParam(':nurse_email', $nurse_email, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    //if user exists in database
       if($query->rowCount() > 0)
       {

           foreach($results as $result){
            // password verify with the user input and with the database password value
               if(password_verify($nurse_password, $result->nurse_password)) {
                  //if it match, redirect to home
                   echo "<script> document.location = 'home.php'; </script>";
               }else{
                //if it does not match, print error
                $message = '<div  class="text-center" style ="padding: 20px; background-color: #f44336; color: white;" >WRONG CREDENTIALS </div>';
            }
        }
    } else{
      //print error if this email does not exist in the table nurse
        $message = '<div  class="text-center" style ="padding: 20px; background-color: #f44336; color: white;" >WRONG CREDENTIALS </div>';
    }

  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Health Care | Register</title>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

section {
position: relative;
min-height: 100vh;
/* background-color: #f8dd30; */
background-image: url('1.jpg');
display: flex;
justify-content: center;
align-items: center;
padding: 20px;
}

section .container {
position: relative;
width: 800px;
height: 500px;
background: #fff;
box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
overflow: hidden;
}

section .container .user {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
}

section .container .user .imgBx {
position: relative;
width: 50%;
height: 100%;
background: #ff0;
transition: 0.5s;
}

section .container .user .imgBx img {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
object-fit: cover;
}

section .container .user .formBx {
position: relative;
width: 50%;
height: 100%;
background: #fff;
display: flex;
justify-content: center;
align-items: center;
padding: 40px;
transition: 0.5s;
}

section .container .user .formBx form h2 {
font-size: 18px;
font-weight: 600;
text-transform: uppercase;
letter-spacing: 2px;
text-align: center;
width: 100%;
margin-bottom: 10px;
color: #555;
}

section .container .user .formBx form input {
position: relative;
width: 100%;
padding: 7px;
background: #f5f5f5;
color: #333;
border: none;
outline: none;
box-shadow: none;
margin: 8px 0;
font-size: 14px;
letter-spacing: 1px;
font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
max-width: 100px;
background: #677eff;
color: #fff;
cursor: pointer;
font-size: 14px;
font-weight: 500;
letter-spacing: 1px;
transition: 0.5s;
}

section .container .user .formBx form .signup {
position: relative;
margin-top: 20px;
font-size: 12px;
letter-spacing: 1px;
color: #555;
text-transform: uppercase;
font-weight: 300;
}

section .container .user .formBx form .signup a {
font-weight: 600;
text-decoration: none;
color: #677eff;
}

section .container .signupBx {
pointer-events: none;
}

section .container.active .signupBx {
pointer-events: initial;
}

section .container .signupBx .formBx {
left: 100%;
}

section .container.active .signupBx .formBx {
left: 0;
}

section .container .signupBx .imgBx {
left: -100%;
}

section .container.active .signupBx .imgBx {
left: 0%;
}

section .container .signinBx .formBx {
left: 0%;
}

section .container.active .signinBx .formBx {
left: 100%;
}

section .container .signinBx .imgBx {
left: 0%;
}

section .container.active .signinBx .imgBx {
left: -100%;
}

@media (max-width: 991px) {
section .container {
  max-width: 400px;
}

section .container .imgBx {
  display: none;
}

section .container .user .formBx {
  width: 100%;
}
}
    </style>
  </head>
  <body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="5.jpg" alt="" /></div>
        <div class="formBx">
          <form method="post" action="">
            <h2>Sign In</h2>
            <input type="text" name="nurse_email_login" placeholder="Email" />
            <input type="password" name="nurse_password_login" placeholder="Password" />
            <input type="submit" name="login" value="Login" />
            <?php if(isset(  $message)){  echo $message; }?>
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action=""  method="post">
            <h2>Create an account</h2>
            <input type="text" name="nurse_fname" placeholder="First Name" required/>
            <input type="text" name="nurse_lname" placeholder="Last Name" required/>
            <input type="text" name="healthcare_center" placeholder="Healthcare Center Name" required/>
            <input type="email" name="nurse_email" placeholder="Email Address" required/>
            <input type="tel" pattern="[0-9]{8}" name="nurse_phone" placeholder="Phone Number" title="Must contain an 8 digit phone number" required/>
            <input type="password" name="nurse_password" placeholder="Create Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
            <input type="password" name="nurse_confirm_password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
            <input type="submit" name="nurse_signup" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="4.jpg" alt="" /></div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
  </script>
</body>
</html>
