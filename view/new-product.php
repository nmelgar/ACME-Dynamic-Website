<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ACME Login</title>
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
                <div  class="login-container">
                <h1>Add a New Product</h1>
                <p>Add a new product</p>
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                ?>
                <form action="/acme/products/index.php" method="post">
                Inventory Name:<br>
                <input type="text" name="invName" id="invName" required>
                <br>
                <br />
                Inventory Description:<br>
                <input type="text" name="invDescription" id="invDescription" required>
                <br>
                <br />
                Inventory Image<br>
                <input type="text" name="invImage" id="invImage" value="/acme/images/products/no-image.png" required>
                <br>
                <br />
                Inventory Thumbnail<br>
                <input type="text" name="invThumbnail" id="invThumbnail" value="/acme/images/products/no-image.png" required>
                <br>
                <br />
                Inventory Price:<br>
                <input type="number" name="invPrice" id="invPrice" required>
                <br>
                <br />
                Inventory Stock:<br>
                <input type="number" name="invStock" id="invStock" required>
                <br>
                <br />
                Inventory Size<br>
                <input type="number" name="invSize" id="invSize" required>
                <br>
                <br />
                Inventory Weight<br>
                <input type="number" name="invWeight" id="invWeight" required>
                <br>
                <br />
                Inventory Location:<br>
                <input type="text" name="invLocation" id="invLocation" required>
                <br>
                <br />
                <label>Category</label>
                <br>
                <?php echo $catList; ?>
                <br>
                <br />
                Inventory Vendor<br>
                <input type="text" name="invVendor" id="invVendor" required>
                <br>
                <br />
                Inventory Style<br>
                <input type="text" name="invStyle" id="invStyle" required>
                <br>
                <br />
                <br />
                <input type="submit" name="submit" value="Add Product">
                <input type="hidden" name="action" value="newProd">   

                </form>
                </div>
            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>