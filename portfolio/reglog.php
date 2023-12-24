<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Signup Form</title>
  <link rel="stylesheet" href="/portfolio/css/reglog.css" />
</head>
<body>
<div class="hero">
    </div>
  <section class="wrapper">
    <div class="form signup">
      <header>Signup</header>
      <form action="register_action.php" method="POST" id="register" class="input-group">
        <input type="text" placeholder="Full name" name="username">
        <input type="text" placeholder="Email address" name="email">
        <input type="password" placeholder="Password" name="password">
        <div class="checkbox">
          <input type="checkbox" id="signupCheck" />
          <label for="signupCheck">I accept all terms & conditions</label>
        </div>
        <input type="submit" value="Signup" />
      </form>
    </div>

    <div class="form login">
      <header>Login</header>
      <form action="login_action.php" method="POST" id="login" class="input-group">
        <input type="text" placeholder="Email address" name="username">
        <input type="password" placeholder="Password" name="password">
        <a href="#">Forgot password?</a>
        <input type="submit" value="Login" />
      </form>
    </div>

    <script>
      const wrapper = document.querySelector(".wrapper"),
        signupHeader = document.querySelector(".signup header"),
        loginHeader = document.querySelector(".login header");

      loginHeader.addEventListener("click", () => {
        wrapper.classList.add("active");
      });
      signupHeader.addEventListener("click", () => {
        wrapper.classList.remove("active");
      });

      document.getElementById("register").addEventListener("submit", function(event) {
        const password = document.querySelector(".signup input[name='password']").value;
        const email = document.querySelector(".signup input[name='email']").value;
        const termsCheckbox = document.getElementById("signupCheck");

        // Password length validation
        if (password.length < 8) {
          alert("Password must be at least 8 characters long.");
          event.preventDefault(); // Prevent form submission
          return false;
        }

        // Email format validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert("Invalid email format.");
          event.preventDefault(); // Prevent form submission
          return false;
        }

        if (!termsCheckbox.checked) {
        alert("Please accept the terms & conditions to register.");
        event.preventDefault(); // Prevent form submission
        return false;
    }

        // Additional validations or form submission logic can be added here
      });
    </script>
  </section>
</body>
</html>
