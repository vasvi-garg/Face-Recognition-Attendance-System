<? php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FaceMetrics: Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar-placeholder"></div>
    <style>
        body{
          background-image: url("background.jpg");
        }  
        </style>
  <div class="login-container">
    <div class="login-image-container">
      <img src="login.png" alt="Can't load image" class="login-image">
    </div>
    <h1>Login</h1>
    <form action="/login" method="post">
      <?php include('errors.php'; ?>)
      <label class="login-label" for="name">Name:</label>
      <input type="text" class="login-input" id="name" name="name" required>
      <br>
      <label class="login-label" for="registration_number">Registration Number:</label>
      <input type="text" class="login-input" id="registration_number" name="registration_number" required>
      <br>
      <label class="login-label" for="password">Password:</label>
      <input type="password" class="login-input" id="password" name="password" required>
      <br>
      <button type="submit" class="login-button">Login</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>