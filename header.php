<header >
    <div class="title">
      GO ABROAD
     </div>
     <form action="users.php" method="POST">
    <div class="login"><a href="#loginform" class="button but-op">Login</a>

      <a href="#x" class="overlay" id="loginform" ></a>
      <div class="popup">
        <h5>Login</h5>
        <input type="text" name="login" checked="checked" required>
        <h5>Password</h5>
        <input type="password" name="password" checked="checked" required>
        <p>
        <button name="entrance" type="submit">Login</button> 
           <?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost");
mysqli_select_db("test",$conn);
$entrance = mysqli_query("SELECT * FROM user WHERE login='" . $_POST["login"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($entrance);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["name"] = $row[name];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("menu.php");
}
?>

        <button name="registr" class="submit"><a href="registration.php">Registration</a></button>
  
        </p>

      <a class="close" title="Close" href="#close"></a>
</form>
        
      </div>
    </div>

    
    <div class="logo"></div>
  </header>