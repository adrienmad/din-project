<?php
require_once 'config.php';
if(isset($_POST['login']))
{
// Getting username/ email and password
$admin_email=$_POST['admin_email'];
$admin_password=$_POST['admin_password'];

// Fetch data from database on the basis of username/email and password
$sql ="SELECT * FROM admin
WHERE (admin_email=:admin_email)";
    $query=  $conn2 -> prepare($sql);
    $query-> bindParam(':admin_email', $admin_email, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    //if user exists in database, create session and send to dashboard
       if($query->rowCount() > 0)
       {

           foreach($results as $result){

               if(password_verify($admin_password, $result->admin_password)) {

                  //  $_SESSION['userlogin'] = $_POST['nurse_email'];
                  //  $session_username= $_SESSION['userlogin'] ;
                   echo "<script> document.location = 'http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=healthcare&table=admin&pos=0'; </script>";
               }else{
                $message = '<div  class="text-center" style ="padding: 20px; background-color: #f44336; color: white;" >WRONG CREDENTIALS </div>';
            }
        }
    //   echo "<script> document.location = 'dashboard.php'; </script>";
    } else{
        $message = '<div  class="text-center" style ="padding: 20px; background-color: #f44336; color: white;" >WRONG CREDENTIALS </div>';
    }

  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Health Care | Admin Login</title>
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
          <?php if(isset(  $message)){  echo $message; }?>
            <h2>Admin Login</h2>
            <input type="email" name="admin_email" placeholder="Email" />
            <input type="password" name="admin_password" placeholder="Password" />
            <input type="submit" name="login" value="Login" />
            <p>Please note that to have admin access you will need to contact the service provider on +230 57967346 to create your access</p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
//   const toggleForm = () => {
//   const container = document.querySelector('.container');
//   container.classList.toggle('active');
// };
  </script>
</body>
</html>
