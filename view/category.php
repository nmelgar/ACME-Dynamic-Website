<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $categoryName; ?> Products | Acme, Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/acme/css/style.css">
</head>

<body>
    <div id="container">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
        </header>
        <nav>
            <?php echo $navList; ?>
        </nav>
        <main>
            <div>
                <h1><?php echo $categoryName; ?> Products</h1>
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];

                    // unset message after displaying it
                    unset($_SESSION['message']);
                }
                ?>


                <?php if(count($products) > 0) { ?>
                    <ul id="prod-display">
                        <?php foreach ($products as $product) { ?>
                        <li>
                            <a href="/acme/products/?action?detail&invId=<?php echo $product['invId'] ?>" title="View <?php echo $product['invName'] ?>"><img src='<?php echo $product['invThumbnail'] ?>' alt='Image of <?php echo $product['invName'] ?> on Acme.com'></a>
                            <hr>
                            <h2><?php echo $product['invName'] ?></h2>
                            <span><?php echo $product['invPrice'] ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </main>


        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </footer>

    </div>
</body>

</html>