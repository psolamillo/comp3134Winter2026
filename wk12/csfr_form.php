<?php
session_start();
$_SESSION['confirmation'] = bin2hex(random_bytes(16));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSFR Form</title>
    <meta name="description" content="description"/>
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <link rel="stylesheet" href="./stylesheet.css" type="text/css" />
    <style type="text/css">.body { width: auto; }</style>
  </head>
  <body>
    <form method="POST" action="csfr_action.php">
        <label>Username</label>
        <br/>
        <input type='text' name='username' />
        <br/>
        <label>Password</label>
        <br/>
        <input type="password" name="password">
        <br/>
        <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>" />
        <input type='submit' name='submit' value='Submit Form'>
    </form>
  </body>
</html>
