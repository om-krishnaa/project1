<?php
// session_start();

// if (isset($_POST["submit"])) {
//     // Collect form input
//     $fullname = $_POST["fullname"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
    
//     // Validate required fields
//     if (empty($fullname) || empty($email) || empty($password)) {
//         echo "<div class='alert alert-danger'>All fields are required.</div>";
//         exit();
//     }

//     require_once "connection.php";

//     // Query to find the user by email
//     $sql = "SELECT * FROM users WHERE email='$email'";
//     $result = mysqli_query($conn, $sql);
//     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

//     // Check if user exists and password matches
//     if ($user) {
//         // Check password using password_verify
//         if (password_verify($password, $user["password"])) {

//             // Check if the full name matches
//             if ($fullname === $user["fullname"]) {
//                 // Start user session and store user details
//                 $_SESSION["user_id"] = $user["id"];
//                 $_SESSION["email"] = $user["email"];
//                 $_SESSION["fullname"] = $user["fullname"];
//                 $_SESSION["user_type"] = $user["user_type"]; // If you want to store user type

//                 // Redirect to the homepage or a logged-in area
//                 header("Location: index.html");
//                 exit();
//             } else {
//                 echo "<div class='alert alert-danger'>Name does not match.</div>";
//             }
//         } else {
//             echo "<div class='alert alert-danger'>Password does not match.</div>";
//         }
//     } else {
//         echo "<div class='alert alert-danger'>Email does not match.</div>";
//     }
// }


?>
<?php

if (isset($_POST["submit"])) {
    // Collect form input
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Validate required fields
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
        exit();
    }

    require_once "connection.php";

    // Query to find the user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Check if user exists and password matches
    if ($user) {
        // Check password using password_verify
        if (password_verify($password, $user["password"])) {

            // Check if the full name matches
            if ($fullname === $user["fullname"]) {
                // Start user session and store user details
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["fullname"] = $user["fullname"];
                $_SESSION["user_type"] = $user["user_type"]; // If you want to store user type

                // Redirect based on user type
                if ($_SESSION["user_type"] == "admin") {
                    header("Location: admin_pannel.php");  // Redirect to admin page
                } else {
                    header("Location: index.php");   // Redirect to user page
                }
                exit();
            } else {
                echo "<div class='alert alert-danger'>Name does not match.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password does not match.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not match.</div>";
    }
}
?>
