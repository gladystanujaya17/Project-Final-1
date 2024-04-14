<?php

require 'koneksi.php';

if (isset($_POST["register"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($con, $_POST["confirmpassword"]);

    // Query pengecekan username
    $check_username = mysqli_query($con, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($check_username) > 0) {
        echo "
        <script>alert('Username is already registered!');</script>
        ";
        return false;
    }

    // Cek password
    if ($password !== $confirmpassword) {
        echo "
        <script>alert('Password confirmation is wrong!');</script>
        ";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah ke database
    $register_query = mysqli_query($con, "INSERT INTO user VALUES('', '$username', '$password')");

    $register_count = mysqli_affected_rows($con);
    // $register_data = mysqli_fetch_assoc($con);
    var_dump($register_count); 

    if ($register_count > 0) {
        echo "
            <script>alert('User baru berhasil ditambahkan');</script>
        ";
    }
    else {
        echo mysqli_error($con);
    }
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

    <title>Register Page</title>
</head>

<style>

</style>

<body>
    <!--Bagian Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Cheesy Cheese Bakery <i class="bi bi-chat-left-heart-fill"></i></a>
      </div>
    </nav>

    <!-- Bagian Registrasi -->
    <div class="login-container">
        <div class="login-user">
            <center><h1>Register</h1></center>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Input Username" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" placeholder="Input Password" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Confirm Password</label>
                    <input type="password" id="inputPassword5" class="form-control" name="confirmpassword" aria-describedby="passwordHelpBlock" placeholder="Confirm Password" required>
                </div>
                <div class="register-link">
                    <p>Already have an account? <a href="login.php">Login</a> here</p>
                </div>
                <div class="button-form">
                    <button type="submit" class="btn btn-light mt-3 btn-submit" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container">
</div>
</body>
</html>