<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<header style="display: flex; justify-content: space-between; align-items: center; padding: 15px 30px; background-color: #2c3e50; color: #ffffff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
  <div class="logo" style="font-size: 1.8rem; font-weight: bold;">🌟 MyApp</div>
  <nav style="display: flex; gap: 20px;">
    <a href="#" style="color: #ffffff; text-decoration: none; font-size: 1rem;">Home</a>
    <a href="#" style="color: #ffffff; text-decoration: none; font-size: 1rem;">About</a>
    <a href="#" style="color: #ffffff; text-decoration: none; font-size: 1rem;">Contact</a>
  </nav>
</header>
<body style="background-image: url('a.png'); background-size: cover; background-position: center;"></body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
    <div class="input-group">
       <i class="fa-solid fa-user"></i>
       <input type="text" name="fName" id="fName" placeholder="First Name" required>
       <label for="fname">First Name</label>
    </div>
    <div class="input-group">
      <i class="fas fa-user"></i>
      <input type="text" name="lName" id="lName" placeholder="Last Name" required>
      <label for="lName">Last Name</label>
    </div>
    <div class="input-group">
      <i class="fas fa-envelope"></i>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <label for="email">Email</label>
    </div>
    <div class="input-group">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>
     <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
    ----------or--------
    </p>
    <div class="icons">
    <i class="fab fa-google"></i>
    <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
    <p>Already Have Account ?</p>
    <button id="signInButton">Sign In</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <p class="recover">
      <a href="#">Recover Password</a>
      </p>
     <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
    </div>
    <script src="script.js"></script>
<!-- Add Google Translate Below Both Login & Register Containers -->
<div style="text-align: center; margin-top: 20px;">
    <h3 style="color: white; font-weight: bold;">Translate This Page</h3>
    <div id="google_translate_element"></div>
</div>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>
