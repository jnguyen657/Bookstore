<html>
<head>

    <style> 
    body {
    font-family: sans-serif;
    text-align: center;
    background-image: linear-gradient(to right, #d9d9d9 , #2d2f31);
  }
  
  form {
    display: inline-block;
    margin: 0 auto;
    text-align: left;
    max-width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    background-color: #d9d9d9;
  }
  
  label {
    display: block;
    margin-bottom: 10px;
  }
  
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  input[type=button], input[type=submit], input[type=reset] {
  background-color: #2d2f31;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: auto;
  cursor: pointer;
}
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  
  h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight:normal;
  }

  h2 {
    font-weight:normal;
  }
  </style>
    <script src="script.js"> </script>
</head>

<?php

session_start();
$_SESSION["session_username"] = $_POST['username'];
?>

<body>
    <br> <br> <br> <br>
    <div>
      <h1 >Justin's Bookstore</h1>
    <br> <br>
    <h2> Login</h2>
    <form action="dropdownmenu.html" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Ex: samsmith123"> <br> <br>
      <label for="password">Password:</label> 
      <input type="password" id="password" name="password" placeholder="Ex: June10th"><br> <br>

      <input type="submit" value="Submit" onclick="ValidateName(); ValidatePassword()">
       <br>
    </form> 

    <br> <br>

    New user? <a href="newuser.php"> Create an account. </a>   &#128214;


  </body>

 

</html>

