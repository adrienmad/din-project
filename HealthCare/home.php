<?php
// for this part of the code we will use php for the regristration -- use php to send the data from from to db
session_start();
require_once('config.php');

// for signup nurse
if(isset($_POST['submit_patient_details'])){


  //store input value form into variables
  $patient_fname = $_POST['patient_fname'];
  $patient_lname = $_POST['patient_lname'];
  $patient_age = $_POST['patient_age'];
  $patient_phone = $_POST['patient_phone'];
  $patient_address = $_POST['patient_address'];
  $patient_email = $_POST['patient_email'];
  $pregnancies = $_POST['pregnancies'];
  $bmi = $_POST['bmi'];
  $skin_thickness = $_POST['skin_thickness'];
  $glucose = $_POST['glucose'];
  $blood_pressure = $_POST['blood_pressure'];
  $insuline = $_POST['insuline'];
  $diabeties_pedigree_function = $_POST['diabeties_pedigree_function'];
  $outcome = $_POST['outcome'];
  $date_form_filled = $_POST['date_form_filled'];
  $status = $_POST['status'];
  $patient_gender = $_POST['patient_gender'];

//sql to fetch if patient email already exist 
  $sql = "SELECT * FROM patient where patient_email = '$patient_email'";
      $query = $conn2 -> prepare($sql);
      $query->execute();

      $count = $query->rowCount();
      //if greater than 0, this email address already exist
      if($count > 0)
      {
        echo "<script>alert('Already existed')</script>";
      }
      else {
        // insert on table nurse
           $stmt = $conn2->prepare("INSERT INTO  patient (patient_fname, patient_lname, patient_age, patient_phone, patient_address, patient_email, pregnancies, bmi, skin_thickness, glucose, blood_pressure, insuline, diabeties_pedigree_function, outcome, date_form_filled, status, patient_gender) VALUES
           (:patient_fname, :patient_lname, :patient_age, :patient_phone, :patient_address, :patient_email, :pregnancies, :bmi, :skin_thickness, :glucose, :blood_pressure, :insuline, :diabeties_pedigree_function, :outcome, :date_form_filled, :status, :patient_gender)");

          //attach bind parameters to the variable form inputs before inserting into the database
             $stmt->bindParam(':patient_fname', $patient_fname, PDO::PARAM_STR);
             $stmt->bindParam(':patient_lname', $patient_lname, PDO::PARAM_STR);
             $stmt->bindParam(':patient_age', $patient_age, PDO::PARAM_STR);
             $stmt->bindParam(':patient_phone', $patient_phone, PDO::PARAM_STR);
             $stmt->bindParam(':patient_address', $patient_address, PDO::PARAM_STR);
             $stmt->bindParam(':patient_email', $patient_email, PDO::PARAM_STR);
             $stmt->bindParam(':pregnancies', $pregnancies, PDO::PARAM_STR);
             $stmt->bindParam(':bmi', $bmi, PDO::PARAM_STR);
             $stmt->bindParam(':skin_thickness', $skin_thickness, PDO::PARAM_STR);
             $stmt->bindParam(':glucose', $glucose, PDO::PARAM_STR);
             $stmt->bindParam(':blood_pressure', $blood_pressure, PDO::PARAM_STR);
             $stmt->bindParam(':insuline', $insuline, PDO::PARAM_STR);
             $stmt->bindParam(':diabeties_pedigree_function', $diabeties_pedigree_function, PDO::PARAM_STR);
             $stmt->bindParam(':outcome', $outcome, PDO::PARAM_STR);
             $stmt->bindParam(':date_form_filled', $date_form_filled, PDO::PARAM_STR);
             $stmt->bindParam(':status', $status, PDO::PARAM_STR);
             $stmt->bindParam(':patient_gender', $patient_gender, PDO::PARAM_STR);
             $stmt->execute();

      }

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME | Healthcare</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style media="screen">
    /* all */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}

/* color for the feilds */
:root {
--main-blue: #71b7e6;
--main-purple: #9b59b6;
--main-grey: #ccc;
--sub-grey: #d9d9d9;
}

body {
/* display: flex; */
height: 100vh;
justify-content: center; /*center vertically */
align-items: center; /* center horizontally */
background-image: url('back.jpg');
padding: 10px;
}
/* container and form */
.container {
max-width: 700px;
width: 100%;
background: #fff;
padding: 25px 30px;
padding-top: 10px;
border-radius: 15px;
}
.container .title {
font-size: 25px;
font-weight: 500;
position: relative;
}

.container .title::before {
content: "";
position: absolute;
height: 3.5px;
width: 30px;
background: #06438A;
left: 0;
bottom: 0;
}

.container form .user__details {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 20px 0 12px 0;
}
/* inside the form user details */
form .user__details .input__box {
width: calc(100% / 2 - 20px);
margin-bottom: 15px;
}

.user__details .input__box .details {
font-weight: 500;
margin-bottom: 5px;
display: block;
}
.user__details .input__box input {
height: 45px;
width: 100%;
outline: none;
border-radius: 5px;
border: 1px solid var(--main-grey);
padding-left: 15px;
font-size: 16px;
border-bottom-width: 2px;
transition: all 0.3s ease;
}

.user__details .input__box input:focus,
.user__details .input__box input:valid {
border-color: var(--main-purple);
}

/* inside the form gender details */

form .gender__details .gender__title {
font-size: 20px;
font-weight: 500;
}

form .gender__details .category {
display: flex;
width: 80%;
margin: 15px 0;
justify-content: space-between;
}

.gender__details .category label {
display: flex;
align-items: center;
}

.gender__details .category .dot {
height: 18px;
width: 18px;
background: var(--sub-grey);
border-radius: 50%;
margin: 10px;
border: 5px solid transparent;
transition: all 0.3s ease;
}

#dot-1:checked ~ .category .one,
#dot-2:checked ~ .category .two,
#dot-3:checked ~ .category .three {
border-color: var(--sub-grey);
background: var(--main-purple);
}

form input[type="radio"] {
display: none;
}

/* submit button */
form .button {
height: 45px;
margin: 45px 0;
}

form .button input {
height: 100%;
width: 100%;
outline: none;
color: #fff;
border: none;
font-size: 18px;
font-weight: 500;
border-radius: 5px;
background: #06438A;
transition: all 0.3s ease;
}

form .button input:hover {
background: #248991;
}

@media only screen and (max-width: 584px) {
.container {
  max-width: 100%;
  padding-top: 30px;
}

form .user__details .input__box {
  margin-bottom: 15px;
  width: 100%;
}

form .gender__details .category {
  width: 100%;
}

.container form .user__details {
  max-height: 300px;
  overflow-y: scroll;
}

.user__details::-webkit-scrollbar {
  width: 0;
}
}

    </style>
  </head>
  <body>
    <div class="container">
  <div class="title">Patient Registration</div>
  <form action="" method="post">
    <div class="user__details">
      <div class="input__box">
        <span class="details">First Name</span>
        <input type="text" placeholder="First name" name="patient_fname" required>
      </div>
      <div class="input__box">
        <span class="details">Last Name</span>
        <input type="text" placeholder="Last Name" name="patient_lname" required>
      </div>
      <div class="input__box">
        <span class="details">Email</span>
        <input type="email" placeholder="Email Address" name="patient_email" required>
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel" pattern="[0-9]{8}" title="Must contain an 8 digit phone number" placeholder="Phone Number" name="patient_phone" required>
        <small>Format: 57896543</small>
      </div>
      <div class="input__box">
        <span class="details">Age</span>
        <input type="number" min="1" placeholder="Age" name="patient_age" required>
      </div>
      <div class="input__box">
        <span class="details">address</span>
        <input type="text" placeholder="Street Address" name="patient_address" required>
      </div>
      <div class="input__box">
        <span class="details">Pregnancies</span>
        <input type="number" placeholder="0"  name="pregnancies" required>
      </div>
      <div class="input__box">
        <span class="details">BMI</span>
        <input type="number" placeholder="0.0" min="0"  step="0.01" pattern="^\d+(?:\.\d{1,2})?$" title="Can take whole number or decimal" name="bmi" required>
      </div>
      <div class="input__box">
        <span class="details">Skin Thickness</span>
        <input type="number" placeholder="0.0" min="0"  step="0.01" pattern="^\d+(?:\.\d{1,2})?$" title="Can take whole number or decimal" name="skin_thickness" required>
      </div>
      <div class="input__box">
        <span class="details">Glucose</span>
        <input type="number" placeholder="0.0" min="0"  step="0.01" pattern="^\d+(?:\.\d{1,2})?$" title="Can take whole number or decimal" name="glucose" required>
      </div>
      <div class="input__box">
        <span class="details">Blood Pressure</span>
        <input type="number" placeholder="0.0" min="0"  step="0.01" pattern="^\d+(?:\.\d{1,2})?$" title="Can take whole number or decimal" name="blood_pressure" required>
      </div>
      <div class="input__box">
        <span class="details">Insulin</span>
        <input type="number" placeholder="0" placeholder="" name="insuline" required>
      </div>
      <div class="input__box">
        <span class="details">Diabetes Pedigree Function</span>
        <input type="number" min="0"  step="0.01" pattern="^\d+(?:\.\d{1,2})?$" placeholder="0" title="Can take whole number or decimal" name="diabeties_pedigree_function" required>
      </div>
      <div class="input__box">
        <span class="details">Outcome</span>
        <input type="number" placeholder="0" name="outcome" required>
      </div>
      <div class="input__box">
        <span class="details">Date</span>
        <input type="date" placeholder="" name="date_form_filled" required>
      </div>
      <div class="input__box">
        <span class="details">status</span>
        <input type="text" placeholder="Active/Unactive" name="status" required>
      </div>
    </div>
    <div class="gender__details">
      <input type="radio" name="patient_gender" value="Male" id="dot-1">
      <input type="radio" name="patient_gender" value="Female" id="dot-2">
      <input type="radio" name="patient_gender" value="Prefer not to say" id="dot-3">
      <span class="gender__title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span>Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span>Female</span>
        </label>
        <label for="dot-3">
          <span class="dot three"></span>
          <span>Prefer not to say</span>
        </label>
      </div>
    </div>
    <div class="button">
      <input type="submit" value="Register" name="submit_patient_details">
    </div>
  </form>
</div>
  </body>
</html>
