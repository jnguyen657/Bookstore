<html>
<head>

    <link rel="stylesheet" href="styles.css">
    <script src="script.js"> </script>
</head>

<body>
    <br> <br> <br> <br>
    <div>
    <h1>Create a New Account</h1>
    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Ex: samsmith123"> <br> <br>
      <label for="password">Password:</label> 
      <input type="password" id="password" name="pw" placeholder="Ex: June10th"><br> <br>
      <input type="submit" value="Submit" onclick="ValidateName(); ValidatePassword()"> <br>
    </form> 

    <br> <br>

    <a href="homepage.html"> Back to sign in </a>

<?php 
// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);

session_start();

        $servername = "sql1.njit.edu";
        $username = "jtn3";
        $pw = "Quynhhuong789&";
        $dbname = "jtn3";

$conn = mysqli_connect($servername, $username, $pw, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    

        $Clientusername = mysqli_real_escape_string($conn, $_REQUEST["username"]);
        $Clientpassword = mysqli_real_escape_string($conn, $_REQUEST["pw"]);

        $sql = "INSERT INTO BookstoreUsers (username, password, customerOrder) 
    VALUES ('$Clientusername', '$Clientpassword', ' ')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Account created successfully.")</script>';
    }

    else {
        echo '<script>alert("Error creating account.")</script>';
    }

  }

    mysqli_close($conn);
?>

</body>
</html>