<!DOCTYPE html>
<html>
<title>Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>REGISTER HERE TO GET BEST OFFERS !!!</h2>
  </div>
  <form class="w3-container" action="form.php" method="post">
    <p>
    <label class="w3-text-brown"><b>First Name</b></label>
    <input class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>
    <label class="w3-text-brown"><b>Last Name</b></label>
    <input class="w3-input w3-border w3-sand" name="second" type="text"></p>
    <p>
      <p>
      <label class="w3-text-brown"><b>E-mail</b></label>
      <input class="w3-input w3-border w3-sand" name="last" type="text"></p>
      <p>
    <button class="w3-btn w3-brown">Register</button></p>
  </form>
</div>

</body>
</html>
<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("reg") or die (mysql_error());
if(isset($_POST['Registration Form']))
{
  $fname=$_POST['first'];
  $lname=$_POST['second'];
  $eid=$_POST['last'];

  if($fname=='')
  {
    echo"<script>lert('please enter the first name')</script>;
  }
  if($eid=='')
  {
    echo"<script>lert('please enter the Email id name')</script>;
  }
  if($lname=='')
  {
    echo"<script>lert('please enter the last name')</script>;
  }
  $query="insert into user(First Name,Last Name,Email_Id) values ('$fname','$lname','$eid')";
  if (mysql_query($query))
  {
    echo"<h3>You have registered"</h3>";
  }

}
?>php
