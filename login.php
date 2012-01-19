<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
<title>Login Page</title>
</head>
<body>
<form id='login' action="authenticate.php" method="post" accept-charset='UTF-8'>
  <fieldset>
  	<legend>Login Form</legend>
    <?php if(isset($_GET['login']) && $_GET['login'] == "failed")
        echo '<p style="color:red">Incorrect Username or Password</p>';?>
    <label for="username">Username/Email Address:</label>
    <input name="username" type="text" size="20"/>
    <label for="password">Password:</label>
    <input name="password" type="password" size="20" />
    <input type="submit" value="Log In" name="submit" />
    <input type="hidden" name="redirect" value="<?php echo $_GET['redirect']?>"/>
  
  <p><a href="https://integration.fellowshipone.com/integration/Conversion/Create.aspx?
    cCode=[YourChurchCode]" target="_blank">Create Account</a> | <a href="https://integration.fellowshipone.com/integration/loginhelp.aspx?
    cCode=[YourChurchCode]">Forgot Password?<br />
    </a> </p>
    </fieldset>
</form>
</body>
</html>