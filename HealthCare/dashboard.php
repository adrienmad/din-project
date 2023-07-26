<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Healthcare | Dashboard</title>
  </head>
  <style media="screen">
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
  box-sizing: border-box;
}

body{
  margin: 0;
  font-family: 'Montserrat',sans-serif;
  overflow-x: hidden;
  background: rgba(255, 255, 255, 0.45);
  /* background-color: #EEF1FC; */
  background-image: url('7.jpg');
  /* background-repeat: no-repeat; */
  background-size: cover;
}

a{
  text-decoration: none;
}

li{
  list-style: none;
}

.navbar{
  display: flex;
  justify-content: space-between;
  padding: 2rem;
  align-items: center;
}

.navbar .logo{
  font-weight: bold;
  font-size: 2.5rem;
  line-height: 37px;
  letter-spacing: 0.075em;
  color: #000000;
}

.nav-links{
  display: flex;
}

.nav-links li a{
  padding: 0 1.5rem;
  font-weight: bold;
  color: #13274F;
  opacity: 0.6;
}

.nav-links li a:hover{
  border-bottom: 2px solid #597FE2;
  width: 50%;
  padding-bottom: 0.5rem;
  opacity: 1;
}

.header{
  text-align: center;
  margin-top: 10rem;
}

.header p{
  width: 40%;
  margin: auto;
}

.cards{
  max-width: 1100px;
  margin: 4rem auto;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 3rem;
  text-align: center;
}

.card{
  width: 340px;
  height: 230px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.6);
}
.card:hover{
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.6);
  transform: scale(1.1);
  transition: all 0.3s ease;
}

.card button{
  margin: 2rem 0 1rem 0;
  border: 2px solid #E2E7FA;
  padding: 1rem 1.5rem;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  background-color: transparent;
}

.card button:hover{
  background-color: #597FE2;
  color: #fff;
}

.footer{
  background-color: #E2E7FA;
  padding-bottom: 0.5rem;
}

.footer-text{
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 6rem;
  max-width: 1100px;
  width: 100%;
  margin: auto;
}

.footer-text div h4{
 color: #000;
 font-size: 1.2rem;
 text-align: left;
}

.footer h4{
  margin-top: 3rem;
  text-align: center;
  color: #13274F;
  opacity: 0.6;
  padding: 0 4rem;
}

.space{
  padding-top: 1px;
}

@media(max-width: 1250px){
  .cards{
      margin: 4rem auto;
      grid-gap: 2rem;
  }
}

@media(max-width: 1150px){
  .header{
      text-align: center;
      margin-top: 6rem;
  }

  .header h1{
      padding: 0 2rem;
      text-align: center;
  }

  .header p{
      width: 80%;
      margin: auto;
  }

  .cards{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
  }

  .card{
      margin: 1.5rem 0;
      width: 400px;
      height: 300px;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.6);
  }

  .footer-text{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
  }

  .footer-text div h4{
      font-size: 1.2rem;
      text-align: center;
   }

   .footer-text div p{
      width: 60%;
      margin: auto;
   }

   .footer h4{
       margin-top: 5rem;
       text-align: center;
       color: #13274F;
       opacity: 0.6;
       padding: 0 1rem;
   }

}

@media(max-width: 800px){
  .navbar{
      flex-direction: column;
  }

  .navbar .logo{
      margin-bottom: 2rem;
      font-size: 4rem;
  }

  .nav-links li a{
      justify-content: space-between;
      color: #13274F;
      opacity: 0.6;
      padding: 0 1rem;
      font-size: 1rem;
  }
}

@media(max-width: 625px){

  .navbar .logo{
      font-weight: bold;
      font-size: 3rem;
  }

  .nav-links li a{
      justify-content: space-between;
      color: #13274F;
      opacity: 0.6;
      padding: 0 1rem;
      font-size: 0.8rem;
  }
}

@media(max-width: 540px){

  .navbar .logo{
      font-weight: bold;
      font-size: 3rem;
  }

  .nav-links li a{
      justify-content: space-between;
      color: #13274F;
      opacity: 0.6;
      padding: 0 1rem;
      font-size: 0.7rem;
  }
}

@media(max-width: 480px){

  .navbar .logo{
      font-weight: bold;
      font-size: 3rem;
  }

  .nav-links{
      flex-direction: column;
  }

  .nav-links li a{
      margin: 1rem 0;
  }

  .nav-links li a:hover{
      border-bottom: 1px solid #597FE2;
      width: 50%;
      padding-bottom: 0.1rem;
      opacity: 1;
  }

  .header p{
      width: 100%;
      margin: auto;
  }

  .footer{
      width: 100%;
  }
}
  </style>
  <body>
    <nav class="navbar">

    <div class="logo">Healthcare</div>

    <!-- <div class="nav-links">
        <li><a href="#">Color Oracle</a></li>
        <li><a href="#">How To</a></li>
        <li><a href="#">Manuel</a></li>
        <li><a href="#">Design Tips</a></li>
        <li><a href="#">Useful Links</a></li>
    </div> -->

</nav>

<!-- <header class="header">
    <h1>Design for the color impaired</h1>
    <p>Color Oracle is a free color blindness simulator for Windows, Mac and Linux. It takes the guesswork out of
        designing for color blindness by showing you in real time what people with common color vision impairments
        will see.</p>
</header> -->

<div class="cards">
    <div class="card">
        <i class="fab fa-apple fa-4x"></i>
        <a href="admin-login.php">Login as Admin</a>
    </div>
    <div class="card">
        <i class="fab fa-windows fa-4x"></i>
        <a href="Register.php">Register/Login as Nurse</a>
    </div>
    <div class="card">
        <i class="fab fa-linux fa-4x"></i>
        <a>Do a quick test</a>
    </div>
</div>

<footer class="footer">

    <div class="footer-text">
        <div>
            <h4>Admin Login</h4>
            <p>
              Please note that users cannot register as admin. Kindly contact service provider to login as admin.
            </p>
        </div>
        <div>
            <h4>Nurse Login</h4>
            <p>
              On this page you will be able to register and login to access a form to fill in patient details.
            </p>
        </div>
        <div>
            <h4>Quick Test</h4>
            <p>
              On this page you will need to fill in information to have a quick prediction.
            </p>
        </div>
    </div>
        <div class="space">
          <h4>For any queries, please feel free to contact the admin on +230 57967346.</h4>
        </div>


</footer>

  </body>

</html>
