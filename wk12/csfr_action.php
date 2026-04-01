<?php
session_start();

if(isset($_POST['submit'])){
    $sessionToken = $_SESSION['confirmation'];
    $postToken = $_POST['confirmation'];

    if(isset($sessionToken) && isset($postToken) && $sessionToken === $postToken){
        print "Username = " . $_POST["username"];
        print "<br/>";
        print "Password = " . $_POST["password"];
        print "<br/>Request accepted: CSRF token is valid.";
    } else {
        print "Request rejected: CSRF token is missing or invalid.";
    }
    exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSFR Action</title>
    <meta name="description" content="description"/>
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <link rel="stylesheet" href="./stylesheet.css" type="text/css" />
    <style type="text/css">.body { width: auto; }</style>
  </head>
  <body>
    <form method="POST" action="">
        <label>Username</label>
        <br/>
        <input type='text' name='username' />
        <br/>
        <label>Password</label>
        <br/>
        <input type="password" name="password">
        <br/>
        <input type='submit' name='submit' value='Submit Form'>
    </form>
    <?php if (isset($_POST['submit'])): ?>
    <div style="margin-top: 16px; padding: 12px 12px; background-color: #a8a8a8ff; color: #000000ff; border: 1px solid #7c7c7cff; border-radius: 4px;">
        Form submitted successfully
    </div>
    <?php endif; ?>
  </body>
</html>
