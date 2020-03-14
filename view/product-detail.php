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
                <h1></h1>
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];

                    // unset message after displaying it
                    unset($_SESSION['message']);
                }
                ?>
                <ul id="detail-display">
                    <li>
                        <img src='<?php echo $productInfo['invImage'] ?>' alt='Image of <?php $productInfo['invName'] ?> product on Acme.com'>
                    </li>
                    <li id="detail-description">
                        <ul>
                            <li id='detailDesc'><?php echo $productInfo['invDescription']?></li>
                            <li id='detailVendor'>Vendor: <?php echo $productInfo['invVendor']?></li>
                            <li id='detailStyle'>Material: <?php echo $productInfo['invStyle']?></li>
                            <li id='detailWeight'>Weight: <?php echo $productInfo['invWeight'] ?> lbs.</li>
                            <li id='detailSize'>Size: <?php echo $productInfo['invSize'] ?> W x H x L</li>
                            <li id='detailLocation'>At: <?php echo $productInfo['invLocation'] ?> warehouse</li>
                            <li id='detailStock'>In stock: <?php echo $productInfo['invStock']?></li>
                            <li id='detailPrice'>$ <?php echo $productInfo['invPrice']?></li>
                        </ul>

                    </li>

                </ul>



            </div>
        </main>


        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </footer>

    </div>
</body>

</html>