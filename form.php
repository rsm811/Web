<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Details for Bookings</h2>
  <form action="" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter First Name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="mno">Mobile Number:</label>
      <input type="text" class="form-control" id="mno" placeholder="Enter Mobile Number" name="mno" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="date">Date:(in format: yyyy/mm/dd)</label>
      <input type="text" class="form-control" id="date" placeholder="Enter Date" name="date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    <div class="form-group">
        <label for="sel1">Select Destination:</label>
        <select class="form-control" id="sel1" name="sellist1">
          <option>Banglore</option>
          <option>Belgum</option>
          <option>Dandeli</option>
          <option>Gulbarga</option>
          <option>Hampi</option>
          <option>Madikeri</option>
          <option>Mysore</option>
          <option>Udupi</option>
        </select>
        <br>
    </div>  
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms and conditions.
        <a href="t&c.html"><span></span>terms&conditions</a>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <input type="submit" class="btnRegister" name="submit" value="register">
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php
include 'connect.php';
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$date = $_POST['date'];
$sellist1 = $_POST['sellist1'];

$insertquerry = "insert into customer(fname,lname,email,mno,date,sellist1) values('$fname','$lname','$email','$mno','$date','$sellist1')";

$res = mysqli_query($con,$insertquerry);
if($res){
  ?>
  <script>
    alert("data inserted properly");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("data not inserted");
  </script>
  <?php
}

}
?>

</body>
</html>