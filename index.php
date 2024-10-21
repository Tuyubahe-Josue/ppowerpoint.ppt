<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    body{
        background: ;
    }
    form{
        background:gray;
        width: 60vh;
        height: 42vh;
        margin-left:70vh;
        margin-top:30vh;
        border-radius:20px 0 20px;
        /* box-shadow:1px 20px  1px 20px solid yellow; */
    }

    h1{
        margin-left:100px;
        color:#fff ;
    }
    form input{
        width: 30vh;
        height: 3vh;
        margin: 5px;
        margin-left:10px;
        outline:none;
        margin-top:-20px ;
    }
    label{
        margin-left:50px;
        font-size:20px;
        font-family:comic sans ms;
    }
    button{
        width: 80px;
        height: 30px;
        background:#fff;
        color:#000;
        margin-left:25vh;
        margin-top:-1px;
/*         outline:none; */
        border:none;
    }
 </style>
</head>
<body>
    <form action="wellcome.php" method="POST">
<h1>Registration form</h1>
 <label>First name:</label> <input type="text" required name="fname"> <br>
 <label>Last name:</label> <input type="text" required name="lname"> <br>
<label>Username:</label> <input type="text" required name="uname"> <br>
<label>E-mail:</label> &nbsp;&nbsp;&nbsp;&nbsp; <input type="email" required name="email"> <br>
<label>password:</label> <input type="password" required name="pass" > <br>
<label>Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" required name="phone" > <br>
<button type="submit" value="submit">submit</button>
</form>
</body>
</html>
