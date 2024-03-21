<?php
// start de sessie
session_start();

if (isset($_GET['destroy'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav style="display: flex; justify-content: space-between">
        <div class="links">
            <a href="sessions.php">home</a> / <a href="sessions2.php">pagina 2</a> / <a href="sessions3.php">pagina 3</a>
        </div>
        <div class="destroy"><a href="sessions.php?destroy=1">destroy session</a></div>
    </nav>


    <h1>pagina 3</h1>
    <main>
        <?php
        if (isset($_SESSION['name'])) {
            echo '$_SESSION["name"]: ' . $_SESSION['name'];
        } else {
            echo 'no name';
        }
        ?>


    </main>

</body>

</html>