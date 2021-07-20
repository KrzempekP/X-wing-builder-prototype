<?php
session_start();
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
            <h1 class="text-dark p-3">X-wing squadron builder</h1>
        </div>

        <div style="background-color: rgb(169, 170, 97);; text-align: center; border: 2px solid rgb(197, 199, 89);" class="container">
            <div class="row m-auto p-1">
                <div class="col" style="background-color: rgb(169, 170, 97);">
                    <a href="rebelBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/rebel_logo.png"></a>
                    <br>
                    <p style="font-size: 25px;">Rebel Alliance</p>
                </div>
                <div class="col">
                    <a href="empireBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/empire_logo.png"></a>
                    <p style="font-size: 25px;">Empire</p>
                </div>
                <div class="col">
                    <a href="scumBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/scum_logo.png"></a>
                    <p style="font-size: 25px;">Scum and Vilainy</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="scumBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/first_logo.png"></a>
                    <p style="font-size: 25px;">First Order</p>
                </div>
                <div class="col">
                    <a href="resistanceBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/resistance_logo.png"></a>
                    <p style="font-size: 25px;">Resistance</p>
                </div>
                <div class="col">
                    <a href="scumBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/republic_logo.png"></a>
                    <p style="font-size: 25px;">Galactic Republic</p>
                </div>
                <div class="col">
                    <a href="scumBuilder.php"><img class="img-fluid" style="width: 240px; height: 240px;" src="assets/separatist_logo.png"></a>
                    <p style="font-size: 25px;">Separatist Alliance</p>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>