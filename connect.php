<!-- connect.php -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'chatai') or die("Connection Failed");

    if (
        isset($_POST['firstName']) &&
        isset($_POST['lastName']) &&
        isset($_POST['phone']) &&
        isset($_POST['regEmail']) &&
        isset($_POST['regPassword'])
    ) {
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $phone = $_POST['phone'];
        $email = $_POST['regEmail'];
        $password = $_POST['regPassword'];

        $sql = "INSERT INTO register (firstname,lastname, phone,email, password)  
                VALUES ('$firstname','$lastname','$phone','$email','$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Entry Successful";
        } else {
            echo "Error Occurred: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}

// Login validation process
// 

?><?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $conn = mysqli_connect('localhost', 'root', '', 'chatai') or die("Connection Failed: " . mysqli_error($conn));

//   // **Sanitize and validate user input**
//   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//   $password = $_POST['password']; // Sanitize password for display only (avoid unnecessary processing)

//   if (empty($email) || empty($password)) {
//     echo "Please fill in all fields.";
//   } else {
//     // **Prepare SQL statement to prevent SQL injection**
//     $sql = "SELECT * FROM `register` WHERE `email` = ?";
//     $stmt = mysqli_prepare($conn, $sql);

//     if ($stmt) {
//       mysqli_stmt_bind_param($stmt, "s", $email);
//       mysqli_stmt_execute($stmt);
//       $result = mysqli_stmt_get_result($stmt);

//       if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);

//         // **Verify password hash securely**
//         if (password_verify($password, $row['password'])) {
//           // User exists and password matches, start session or redirect to dashboard
//           $_SESSION['email'] = $email;
//           echo "Login Successful";
//           // Redirect to dashboard (replace with your desired URL)
//           exit(); // Terminate script execution after successful login
//         } else {
//           echo "Invalid email or password.";
//         }
//       } else {
//         echo "Invalid email or password.";
//       }

//       mysqli_stmt_close($stmt);
//     } else {
//       echo "Error: " . mysqli_error($conn);
//     }
//   }

//   mysqli_close($conn);
// } else {
//   echo "Invalid request method.";
// }
// 

?>


