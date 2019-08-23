<html>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for= firstname><b>First name</b></label><br>
    <input type="text" placeholder="Enter firstname" name "firstname" required><br>
    
    <label for= last><b>last name<br>
    <input type="text" placeholder="Enter lastname" name "lastname" required><br>
    
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    <hr>

    
    <button type="submit" class="registerbtn">Register </button> 
    
   
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login .html">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
