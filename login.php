<?php

session_start();

require 'koneksi.php';

if (isset($_POST["login"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Query 
    $login_query = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    // Cek username
    if (mysqli_num_rows($login_query) > 0) { // mysqli_num_rows mengembalikan angka (integer)

        // Cek password
        $baris = mysqli_fetch_assoc($login_query); // mysqli_fetch_assoc: ini returnnya Array Associative dengan index String
        
        // Verifikasi password
        if (password_verify($password, $baris["password"])) {
            // Ambil data username
            $_SESSION["username"] = $baris["username"];

            // Set session
            $_SESSION["login"] = true;
            // var_dump($_SESSION); die; -> isinya ada index "username" dan "login" -> true
            
            // Arahkan ke halaman Index
            header("Location: index-login.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="style-login.css" rel="stylesheet" />

    <title>Login Page</title>
</head>


<body>
    <!--Bagian Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Cheesy Cheese Bakery <i class="bi bi-chat-left-heart-fill"></i></a>
        </button>
      </div>
    </nav>

    <!-- Bagian Login -->
    <div class="login-container">
        <div class="login-user">
            <center><h1>Login</h1></center>
            <form action="" method="post">
                <div class="mb-3 input-box">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Input Username" autofocus required>
                </div>
                <div class="mb-3 input-box">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" placeholder="Input Password" required>
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Register</a> here</p>
                </div>
                <div class="button-form">
                    <button type="submit" class="btn btn-light mt-3 btn-submit" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container">
</div>
</body>
</html>