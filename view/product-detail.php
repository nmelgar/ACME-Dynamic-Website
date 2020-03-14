<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Products | Acme, Inc.</title>
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
                <h1>Product</h1>
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
                            <li id='detailVendor'>By <?php echo $productInfo['invVendor']?></li>
                            <li>&nbsp;<li>
                            <li id='detailStyle'>&#8658;Material: <?php echo $productInfo['invStyle']?></li>
                            <li id='detailWeight'>&#8658;Weight: <?php echo $productInfo['invWeight'] ?> lbs.</li>
                            <li id='detailSize'>&#8658;Size: <?php echo $productInfo['invSize'] ?> W x H x L</li>
                            <li>&nbsp;<li>
                            <li id='detailLocation'>At: <?php echo $productInfo['invLocation'] ?> warehouse</li>
                            <li id='detailStock'>Only <?php echo $productInfo['invStock']?> In stock</li>
                            <li>&nbsp;<li>
                            <li id='detailPrice'>Price: $<?php echo $productInfo['invPrice']?></li>
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