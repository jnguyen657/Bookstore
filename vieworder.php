<html>
<head>

<style>
body {background-color : #ededed; font-family : "Open Sans", sans-serif;}

h1 {padding: 40px; text-align: center; font-size: 1.5em;}

li a {text-decoration : none; color : #2d2f31;}


.top-div {
  width : 300px; 
  background: #d9d9d9;
  margin : 40px auto; 
}

span {
  padding : 30px;
  background : #2d2f31; 
  color : white;
  font-size : 1.2em;
  font-variant : small-caps;
  cursor : pointer;
  display: block;
}

span::after {
  float: right;
  right: 10%;
  content: "+";
}

.slide {
  clear:both;
  width:100%;
  height:0px;
  overflow: hidden;
  text-align: center;
  transition: height .4s ease;
}

.slide li {padding : 30px;}

#book {position: absolute; opacity: 0; height: 0px;}    


h1 {
    margin: 40px auto;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #2d2f31;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=text] {
    border: 2px solid black;
    border-radius: 4px;
    width: 300px;
    display: block;
    margin: 40px;
}

.linkDiv {
  text-align: center;
}
</style>

</head>

<body>

</body>

    <h1> Justin's Bookstore</h1>

    <div class="linkDiv">
    <a href="dropdownmenu.html"> Back to menu</a> 
</div>
<?php 
// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);

session_start();

$Clientname = $_SESSION['session_username'];

        $servername = "sql1.njit.edu";
        $username = "jtn3";
        $password = "Quynhhuong789&";
        $dbname = "jtn3";

    // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT customerOrders FROM BookstoreUsers WHERE customerOrders='$Clientname'";


   if ($conn->query($sql) === TRUE) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Current order: " . $row["order"];
    }
  }
  else 
  {
    echo '<script>alert("No data to be found from your purchase history. Make sure that you are logged in and have placed orders.")</script>';
  }
    
  
?>

</html>

