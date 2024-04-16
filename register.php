<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #100e13; /* Dark background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: #3ea3c5; /* Light blue container */
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 400px;
      background-image: url('backgroung.jpg'); /* Add your background image here */
    }
    label {
      font-weight: bold;
      color: #dd9b17; /* Orange color for labels */
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #343a40; /* Dark gray heading */
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="phone"] { /* Added mobile input type */
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      font-size: 16px;
      color: #d11515;
    }
    input[type="submit"],
    #register {
      background-color: #3498db; /* Blue button */
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.2s ease-in-out;
    }
    input[type="submit"]:hover,
    #register:hover {
      background-color: #2980b9; /* Darker blue button on hover */
    }
    #register {
      text-decoration: none; /* Remove underline from register link */
    }
  </style>
</head>
<body>
  <div class="container">
   
    <br>  <h2>Register</h2> 
     <form id="registerForm"action="Connect.php" method="POST" style="text-align: center;">>
    
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
      <label for="phone">Mobile Number:</label>
      <input type="phone" id="phone" name="phone" required>  <label for="regEmail">Email:</label>
      <input type="email" id="regEmail" name="regEmail" required>
      <label for="regPassword">Password:</label>
      <input type="password" id="regPassword" name="regPassword" required>
      <input type="submit" name="submit" action="index.php" value="Register">
    </form>
  </div>

  <script>
    document.getElementById("forms").addEventListener("submit", function(event) {
      event.preventDefault();
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var firstName = document.getElementById("firstName").value;
      if (email.trim() === "" || password.trim() === "" || firstName.trim() === "" ) {
        alert("Please enter the fields valid");
      } 
    });
  </script>
</body>
</html>