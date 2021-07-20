<?php
session_start();
require_once('pdo_connect.php');

if (isset($_POST['submit'])) {
    if (isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from users where username = :username ";
        $query = $pdo->prepare($sql);
        $params = ['username' => $username];
        $query->execute($params);
        if ($query->rowCount() > 0) {
            $getRow = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $getRow['password'])) {
                unset($getRow['password']);
                $_SESSION = $getRow;
                $_SESSION['username'] = $username;
                header('location:index.php');
                exit();
            } else {
                $errors[] = "Wrong Username or Password";
            }
        } else {
            $errors[] = "Wrong Username or Password";
        }
    } else {
        $errors[] = "Please insert values";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-wing builder</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="assets/logo.png" type="image/x-icon" />
</head>

<body style="background-color: rgb(169, 170, 97);">
    <div style="background-color: rgb(169, 170, 97);" class="text-dark">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(135, 136, 61);; height: 40px; padding: 10px;">
            <a class="navbar-brand" href="index.php">
                <img src="assets/icon.png" width="25" class="d-inline-block align-text-top" alt="icon">
                Builder
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Card browser</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About project</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log out</a>
                        </li>
                    <?php
                    }
                    ?>
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login_site.php">Log in</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register_site.php">Register</a>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="text-center">
            <img src="assets/logo.png" class="img-fluid rounded p-3" style="width: 230px">
            <h1 class="text-dark p-3">X-wing squadron builder by Pepe</h1>
        </div>

        <div class="text-center">
            <form class="form-signin text-center" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> " style="margin-right:auto; margin-left:auto; width: 300px; border: 5px solid green; padding: 15px;">
                <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                <?php
                if (isset($errors) && count($errors) > 0) {
                    foreach ($errors as $error_msg) {
                        echo '<div class="alert alert-danger">' . $error_msg . '</div>';
                    }
                }
                ?>
                <label>Username: </label>
                <input style="box-sizing: border-box; display: block;" type="text" class="form-control" placeholder="Username" name="username"><br><br>
                <label>Password: </label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <br>
                <button class="btn btn-lg btn-block btn-primary" name="submit" type="submit">Sign in</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>