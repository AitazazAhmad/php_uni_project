<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfumora Login</title>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #000;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .login-wrapper {
      position: relative;
      width: 100%;
      max-width: 400px;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(255, 255, 0, 0.4);
    }

    video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .login-form {
      position: relative;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 12px;
    }

    h2 {
      color: yellow;
      text-align: center;
      margin-bottom: 20px;
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
      background-color: #222;
      color: #fff;
    }

    input:focus {
      outline: 2px solid yellow;
    }

    .error {
      color: red;
      font-size: 13px;
      display: none;
    }

    button {
      background-color: yellow;
      color: #000;
      padding: 12px;
      border: none;
      width: 100%;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button a {
      color: #000;
      text-decoration: none;
      display: block;
      width: 100%;
      height: 100%;
    }

    button:hover {
      background-color: gold;
    }

    .forgot {
      text-align: right;
      font-size: 13px;
      margin-top: 5px;
    }

    .forgot a {
      color: #fff;
      text-decoration: underline;
    }

    .success-message {
      display: none;
      text-align: center;
      color: lightgreen;
      margin-top: 10px;
    }
  </style>
</head>
<?php
if (isset($_GET['message']))
  echo "<h4>" . $_GET['message'] . "</h4>";
?>

<body>
  <div class="login-wrapper">
    <video autoplay muted loop>
      <source src="C:\Users\LENOVO\Desktop\A\images\7815963-hd_1920_1080_25fps.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <form class="login-form" id="loginForm" action="#" method="post">
      <h2>Login to <span style="color: white;">Perfumora</span></h2>
      <input type="email" id="email" name="email" placeholder="Email" required />
      <div class="error" id="emailError">Please enter a valid email.</div>
      <input type="password" id="password" name="password" placeholder="Password" required />
      <div class="forgot">
        <a href="#">Forgot Password?</a>
      </div>
      <button><a href="index.html">Login</a></button>

      <!-- <button type="submit" name="login" value="login">Login</button> -->
      <div class="success-message" id="successMsg">Successfully Logged In</div>
    </form>
  </div>

  <!-- <script>
    function validateForm() {
      const email = document.getElementById("email").value;
      const error = document.getElementById("emailError");
      const success = document.getElementById("successMsg");

      // Basic email regex
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        error.style.display = "block";
        success.style.display = "none";
        return false;
      } else {
        error.style.display = "none";
        success.style.display = "block";
        return false; // prevent actual submission for demo
      }
    }
  </script> -->
</body>

</html>