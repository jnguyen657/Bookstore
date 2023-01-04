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
  text-align: center;
}

span {
  padding : 30px;
  background : #2d2f31; 
  color : white;
  font-size : 1.2em;
  font-variant : small-caps;
  cursor : default;
  display: block;
}

span::after {
  float: right;
  right: 10%;
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

#book { height: 30px; margin: auto; width: 250px;}    


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
    cursor: auto;
}

</style>

</head>

<body>


    <h1> Justin's Bookstore</h1>

    <div class="top-div">

    <form method="post">
    <label for="book"><span> Enter the title of the book that you wish to order.</span> </label> 
    <br>
    <input type="text" name="customer_order" id="book"> </input>
    
    <input type="submit" value="Submit"> 
    </form>

</div>

</body>
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
    

        $Clientorder = mysqli_real_escape_string($conn, $_REQUEST["customer_order"]);

        $sql = "UPDATE BookstoreUsers SET customerOrder='$Clientorder' WHERE username='$_SESSION[session_username]'";
    

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Your order has been processed.")</script>';
          } else {
            echo '<script>alert("Oops, something happened. Try again.")</script>';
          }

  }

    mysqli_close($conn);
?>

</html>

