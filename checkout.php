<?php
if(isset($_POST['submit'])){
$price = "".$_POST['price']."
";
$style = "".$_POST['style']."
";
$email = "".$_POST['email']."
";
$phone = "".$_POST['phone']."
";
$file=fopen("checkout.txt", "a");
fwrite($file, $price);
fwrite($file, $style);
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
  <title>Check Out</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      <img src="checkout.jpg" height="100" width="100"><br>
      Check Out<br>
    </div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="price" placeholder="Price" required autocomplete="off" list="prices" name="prices">
  <datalist id="prices">
    <option value="$25">
    <option value="$35">
    <option value="$45">
    <option value="$15">
    <option value="$10">
  </datalist><br>
      <input type="text" name="style" placeholder="Services" required autocomplete="off" list="style" name="style">
  <datalist id="style">
    <option value="Express Cut">
    <option value="Wash And Cut">
    <option value="Color and Cut">
    <option value="Kids Cut">
    <option value="Wax">
  </datalist><br>
      <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
    </form>
    <div>
    <P style="text-align:right"><a href="index.php"><img src="home.png" height="30" width="30"></a>
   </div>
  </div>
</body>
</html>
