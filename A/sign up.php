<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfumora Sign Up</title>
  <style>
    /* Global Styles */
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

    .signup-wrapper {
      position: relative;
      width: 90%;
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

    .signup-form {
      position: relative;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
    }

    h2 {
      color: yellow;
      text-align: center;
      margin-bottom: 20px;
      font-size: 22px;
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
      background-color: #222;
      color: #fff;
      font-size: 16px;
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
      margin-top: 10px;
      font-size: 16px;
    }

    button:hover {
      background-color: gold;
    }

    .success-message {
      display: none;
      text-align: center;
      color: lightgreen;
      margin-top: 10px;
    }

    .already {
      text-align: center;
      font-size: 13px;
      margin-top: 10px;
    }

    .already a {
      color: #fff;
      text-decoration: underline;
    }

    /* Responsive Media Queries */
    @media (max-width: 768px) {
      .signup-form {
        padding: 25px;
      }

      h2 {
        font-size: 20px;
      }

      input,
      button {
        font-size: 15px;
        padding: 10px;
      }
    }

    @media (max-width: 480px) {
      .signup-wrapper {
        width: 95%;
      }

      h2 {
        font-size: 18px;
      }

      input,
      button {
        font-size: 14px;
        padding: 8px;
      }

      .signup-form {
        padding: 20px;
      }
    }
  </style>
</head>


<body>
  <div class="signup-wrapper">
    <video autoplay muted loop>
      <source src="images\7815963-hd_1920_1080_25fps.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <form class="signup-form" id="signupForm" action="submit_signup.php" method="post">
      <h2>Create <span style="color: white;">Perfumora</span> Account</h2>
      <input type="text" id="name" name="name" placeholder="Full Name" required />
      <input type="email" id="email" name="email" placeholder="Email" required />
      <div class="error" id="emailError">Please enter a valid email.</div>
      <input type="password" id="password" name="password" placeholder="Password" required />
      <input type="password" id="confirmPassword" name="confirm_pass" placeholder="Confirm Password" required />
      <div class="error" id="passError">Passwords do not match.</div>

      <button type="submit" name="submit_signup">Sign Up</button>
      <div class="success-message" id="successMsg">🎉 Account Created Successfully!</div>
      <div class="already">Already have an account? <a href="login.php">Login</a></div>
    </form>
  </div>

  <script>
    function validateSignup() {
      const email = document.getElementById("email").value;
      const pass = document.getElementById("password").value;
      const confirmPass = document.getElementById("confirmPassword").value;
      const emailError = document.getElementById("emailError");
      const passError = document.getElementById("passError");
      const success = document.getElementById("successMsg");

      // Reset messages
      emailError.style.display = "none";
      passError.style.display = "none";
      success.style.display = "none";

      // Basic email validation
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        emailError.style.display = "block";
        return false;
      }

      // Password match check
      if (pass !== confirmPass) {
        passError.style.display = "block";
        return false;
      }

      // Show success message
      success.style.display = "block";
      return false; // Prevent actual form submission for demo
    }
  </script>
</body>

</html>