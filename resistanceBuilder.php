<?php
session_start();
require_once('pdo_connect.php');
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $points = $_POST['points'];
    $username = $_SESSION['username'];

    $sql = "insert into squadron (squadtext, points, userid) values(:sqdtxt,:points, :userid)";
    try {
        $query = $pdo->prepare($sql);
        $params = [
            ':sqdtxt' => $text,
            ':points' => $points,
            ':userid' => $username,
        ];

        $query->execute($params);

        $success = 'Squadron saved succesfully';
    } catch (PDOException $e) {
        $errors[] = $e->getMessage();
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
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(135, 136, 61);
         height: 40px; padding: 10px;">
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

        <p class="text-center" id="points" style="font-size: 30px; border: 5px solid rgb(135, 150, 61);">Points</p>

        <div class="text-center">
            <label style="font-size: 20px;">Choose a ship: </label>
            <select id="ships" onchange="onChangeSelectShip()">
                <option value=0>Choose a ship</option>
            </select>
        </div>


        <div class="change" id="Fireball" style="display:none; text-align: center;">
            <label style="font-size: 20px;">Choose a pilot: </label>
            <select id="fireball_select" onchange="onChangeSelectFireball()">
                <option value=0>Choose a pilot</option>
            </select>
            <div class="fireball" id="Colossus Station Mechanic" style="display:none">
                <p style="font-size: 20px;">UPGRADES</p>
                <script type="text/javascript" src="generating_upgrades.js"></script>
                <script>
                    generate_missile("Colossus Station Mechanic Missile")
                </script>
                <script>
                    generate_astromech("Colossus Station Mechanic Astromech")
                </script>
                <script>
                    generate_illicit("Colossus Station Mechanic Illicit")
                </script>
                <script>
                    generate_modification("Colossus Station Mechanic Modification")
                </script>
                <script>
                    generate_modification("Colossus Station Mechanic Modification 2")
                </script>
                <script>
                    generate_title("Colossus Station Mechanic Title")
                </script>
                <div class="row">
                    <div class="col-lg-2" >
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Missile">
                            <option value=0>Choose a missile</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Astromech">
                            <option value=0>Choose an astromech</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Illicit">
                            <option value=0>Choose an illicit</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Modification">
                            <option value=0>Choose a modification</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Modification 2">
                            <option value=0>Choose a modification</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select style="width: 230px" class="upg" id="Colossus Station Mechanic Title">
                            <option value=0>Choose a title</option>
                        </select>
                    </div>
                </div>
                <div>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input style="visibility:hidden;" id="points2" type="number" name="points">
                        <input style="visibility:hidden;" id="text2" type="text" name="text"><br>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <button class="btn btn-lg btn-block btn-primary" name="submit" type="submit">Save squadron (count the points before you do)</button>
                        <?php
                        }
                        ?>

                    </form>
                </div>
            </div>
            <div class="fireball" id="Jarek Yeager" style="display:none">
            <br>
                <script type="text/javascript" src="generating_upgrades.js"></script>
                <script>
                    generate_missile("Jarek Yeager Missile")
                </script>
                <script>
                    generate_astromech("Jarek Yeager Astromech")
                </script>
                <script>
                    generate_illicit("Jarek Yeager Illicit")
                </script>
                <script>
                    generate_modification("Jarek Yeager Modification")
                </script>
                <script>
                    generate_modification("Jarek Yeager Modification 2")
                </script>
                <script>
                    generate_title("Jarek Yeager Title")
                </script>
                <script>
                    generate_talent("Jarek Yeager talent")
                </script>
                <select id="Jarek Yeager talent">
                    <option value=0>Choose a talent</option>
                </select>
                <select id="Jarek Yeager Missile">
                    <option value=0>Choose a missile</option>
                </select>
                <select id="Jarek Yeager Astromech">
                    <option value=0>Choose a astromech</option>
                </select>
                <select id="Jarek Yeager Illicit">
                    <option value=0>Choose a illicit</option>
                </select>
                <select id="Jarek Yeager Modification">
                    <option value=0>Choose a modification</option>
                </select>
                <select id="Jarek Yeager Modification 2">
                    <option value=0>Choose a modification</option>
                </select>
                <select id="Jarek Yeager Title">
                    <option value=0>Choose a title</option>
                </select>
            </div>
            <div class="fireball" id="Kazuda Xiono" style="display:none">
                <script type="text/javascript" src="generating_upgrades.js"></script>
                <script>
                    generate_missile("Kazuda Xiono Missile")
                </script>
                <script>
                    generate_astromech("Kazuda Xiono Astromech")
                </script>
                <script>
                    generate_illicit("Kazuda Xiono Illicit")
                </script>
                <script>
                    generate_modification("Kazuda Xiono Modification")
                </script>
                <script>
                    generate_modification("Kazuda Xiono Modification 2")
                </script>
                <script>
                    generate_title("Kazuda Xiono Title")
                </script>
                <script>
                    generate_talent("Kazuda Xiono talent")
                </script>
                <select id="Kazuda Xiono talent">
                    <option value=0>Choose a talent</option>
                </select>
                <select id="Kazuda Xiono Missile">
                    <option value=0>Choose a missile</option>
                </select>
                <select id="Kazuda Xiono Astromech">
                    <option value=0>Choose a astromech</option>
                </select>
                <select id="Kazuda Xiono Illicit">
                    <option value=0>Choose a illicit</option>
                </select>
                <select id="Kazuda Xiono Modification">
                    <option value=0>Choose a modification</option>
                </select>
                <select id="Kazuda Xiono Modification 2">
                    <option value=0>Choose a modification</option>
                </select>
                <select id="Kazuda Xiono Title">
                    <option value=0>Choose a title</option>
                </select>
            </div>
            <div class="fireball" id="R1-J5" style="display:none">
                <script type="text/javascript" src="generating_upgrades.js"></script>
                <script>
                    generate_missile("R1-J5 Missile")
                </script>
                <script>
                    generate_astromech("R1-J5 Astromech")
                </script>
                <script>
                    generate_illicit("R1-J5 Illicit")
                </script>
                <script>
                    generate_modification("R1-J5 Modification")
                </script>
                <script>
                    generate_modification("R1-J5 Modification 2")
                </script>
                <script>
                    generate_title("R1-J5 Title")
                </script>
                <select id="R1-J5 Missile">
                    <option value=0>Choose a missile</option>
                </select>
                <select id="R1-J5 Astromech">
                    <option value=0>Choose a astromech</option>
                </select>
                <select id="R1-J5 Illicit">
                    <option value=0>Choose a illicit</option>
                </select>
                <select id="R1-J5 Modification">
                    <option value=0>Choose a modification</option>
                </select>
                <select id="R1-J5 Modification 2">
                    <option value=0> Choose a modification</option>
                </select>
                <select id="R1-J5 Title">
                    <option value=0>Choose a title</option>
                </select>
            </div>
        </div>
        <div class="change" id="MG-100 StarFortress" style="display:none">
            <p>Test2</p>
        </div>
        <div class="change" id="Resistance Transport" style="display:none">
            <p>Test3</p>
        </div>
        <div class="change" id="Resistance Transport Pod" style="display:none">
            <p>Test4</p>
        </div>
        <div class="change" id="RZ-2 A-wing" style="display:none">
            <p>Test5</p>
        </div>
        <div class="change" id="Scavenged YT-1300" style="display:none">
            <p>Test6</p>
        </div>
        <div class="change" id="T-70 X-wing" style="display:none">
            <p>Test7</p>
        </div>
        <div class="text-center">
            </br><button class="btn btn-lg btn-block btn-primary" type="button" onclick="ChangePointsOnClick()">Count the points!</button>
        </div>
        <?php
        if (isset($errors) && count($errors) > 0) {
            foreach ($errors as $error_msg) {
                echo '<div class="alert alert-danger">' . $error_msg . '</div>';
            }
        }

        if (isset($success)) {

            echo '<div class="alert alert-success">' . $success . '</div>';
        }
        ?>
        <script type="text/javascript" src="Points_change.js"></script>
        <script type="text/javascript" src="generating_upgrades.js"></script>
        <script type="text/javascript" src="resistance_ships.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>