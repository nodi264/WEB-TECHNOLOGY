<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
<?php 
include 'action.php';
$username = $password = "";
$usernameErr = $passwordErr = "";
$login = "";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
if(!$flag) 
    {

    $username = input_data($_POST["username"]);
    $password = input_data($_POST["password"]); 
    $res = login($username,$password);
    if($res)
    {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: welcomepage.php");
    }
    else 
    {
    $login =  "Username/Password doesn't match";
    }
    }
}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>

	<h1>Login</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Login</legend>

			<span style="color: red">*</span><label for="username">User Name:</label>
			<input type="text" name="username" id="username" >
			<span style="color: red"><?php echo $usernameErr; ?> </span><br><br>
			<span style="color: red">*</span><label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>
	
	<span style="color: red"><?php echo $login; ?></span>
	

</body>
</html>