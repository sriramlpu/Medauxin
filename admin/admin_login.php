<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="./admin_styles.css"/>
</head>

<body>
<div class="container">
    <h2>Login</h2>
    <form name="admin-login" action="admin_login_validate.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" name="login" value="login">
      </div>
    </form>
</div>

</body>

</html>
