<?php
// start de sessie
session_start();

if (isset($_GET['destroy'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// print_r($_POST);
if (isset($_POST['bestel'])) {
    $_SESSION['cart'][$_POST['id']] = $_POST['aantal'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav style="display: flex; justify-content: space-between">
        <div class="links">
            <a href="sessions.php">home</a> / <a href="sessions2.php">pagina 2</a> / <a href="sessions3.php">pagina 3</a>
        </div>
        <div class="destroy"><a href="sessions.php?destroy=1">destroy session</a></div>
    </nav>

    <h1>home</h1>
    <p>
    <pre>
        <?php
        if (isset($_SESSION['cart'])) {
            echo "\r\n" . '$_SESSION["cart"]:' . "\r\n";
            print_r($_SESSION["cart"]);
        } else {
            echo 'no cart';
        }
        ?>
        </pre>
    </p>


    <form action="sessions2.php" method="post">

        <input type="text" name="name">


        <input type="submit" value="submit">

    </form>

    <hr>

    <h1>Producten</h1>

    <div class="products">
        <?php
        include 'producten.php';

        foreach ($array['products'] as $product) {
            //echo $product['id'];
        ?>
            <div class="product" style="">
                <a href="detail.php?id=<?= $product['id']; ?>">
                    <div class="title"><?= $product['title']; ?></div>
                </a>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                    <input type="submit" name="bestel" value="bestel">
                    <input type="number" name="aantal" value="1" min=1>
                </form>
            </div>


        <?php
        }
        ?>
    </div>





</body>

</html>