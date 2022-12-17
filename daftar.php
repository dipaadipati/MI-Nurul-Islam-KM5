<?php
session_start();
include("koneksi.php");

if(isset($_SESSION['username']))
    header("Location: index.php"); 

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$username', '$hash', 'murid')");
    if($query){
        $_SESSION["username"] = $username;
        $_SESSION["role"] = 'murid';
        header("Location: index.php"); 
    }
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

        <title>MIS. NURUL ISLAM KM. 5</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST">
            <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Daftar</h1>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
            <p class="mt-5 mb-3 text-muted">© 2022 By : <span>M. Adipati Rezkya (19041094)</span></p>
        </form>
    </body>
</html>