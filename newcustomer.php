<?php
if(isset($_POST['submit'])){
$Name = "".$_POST['firstname']."
";
$Pass = "".$_POST['lastname']."
";
$email = "".$_POST['email']."
";
$phone = "".$_POST['phone']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fwrite($file, $email);
fwrite($file, $phone);
fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>New Customer</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      <img src="newuser.png" height="100" width="100"><br>
      New Customer<br>
    </div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="firstname" placeholder="First Name" required autocomplete="off"> <br>
      <input type="text" name="lastname" placeholder="Last Name" required autocomplete="off"> <br>
      <input type="text" name="email" placeholder="E-Mail" required autocomplete="off"> <br>
      <input type="text" name="phone" placeholder="Phone Number" required autocomplete="off"> <br>
      <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
    </form>
    <div>
    <P style="text-align:right"><a href="index.php"><img src="home.png" height="30" width="30"></a>
   </div>
  </div>
</body>
</html>
