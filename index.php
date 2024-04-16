<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #100e13; /* Light gray background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      opacity: 10px;
    }
    .container {
      background-color: #3ea3c5; /* White container */
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 400px;
      background-image: url('backgroung.jpg');

    }
    label {
        font-weight: bold;
      color: #dd9b17; /* Same orange color as input fields */
         /* Light orange background */
    /*padding: 5px 10px; /* Add some padding for better separation */
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #343a40; /* Dark gray heading */
    }
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      font-size: 16px;
      color: #dd9b17;
    }
    input[type="submit"],#register {
      background-color: #3498db; /* Blue button */
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.2s ease-in-out;
    }
    input[type="submit"]:hover,#register  {
      background-color: #2980b9; /* Darker blue button on hover */
    }
    #register{
        text-decoration: none;
    }
  
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="forms" action="connect.php" method="POST" >
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login" action="connect.php" method="POST" >
    <a href="register.php" id="register">Register</a>

    </form>
  </div>

  <script>
    document.getElementById("forms").addEventListener("submit", function(event) {
      event.preventDefault();
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      
      if (email.trim() === "" || password.trim() === "") {
        alert("Please enter valid email and password.");
      } else {
        // Add your login logic here (e.g., send data to server)
        window.location.href = "http://127.0.0.1:7860/";
      }
    });
  </script>
</body>
</html>
