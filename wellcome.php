<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:#12c;
        }
        p{
            color:#000;
            font-size:20px;
            font-family:comic sans ms;
            background:gray;
            width: 80vh;
            height: 10vh;

        }
        .info{
            color:blue;
            font-size:20px;
            font-family:poppins;
            background:blue;
            width: 80vh;
            color:#fff;
        }
    </style>
</head>
<body>
<h1>WELLCOME!!!!</h1>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
echo '<div class="info">';
echo "<p>First name:</p>". $_POST["fname"],"<br>";
echo "<p>Last name:</p>".$_POST["lname"],"<br>";
echo "<p>User Name:</p>".$_POST["uname"],"<br>";
echo "<p>E-mail:</p>".$_POST["email"],"<br>";
echo "<p>Phone: </p>".$_POST["phone"];
echo '</div>'; 
}
?>