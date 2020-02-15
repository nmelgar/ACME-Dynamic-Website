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
                <label>Category</label>
                <br>
                <?php echo $catList; ?>
                <br>
                <br />
                Inventory Name:<br>
                <input type="text" name="invName" id="invName">
                <br>
                <br />
                Inventory Description:<br>
                <input type="text" name="invDescription" id="invDescription">
                <br>
                <br />
                Inventory Image<br>
                <input type="string" name="invImage" id="invImage">
                <br>
                <br />
                Inventory Thumbnail<br>
                <input type="string" name="invThumbnail" id="invThumbnail" value="/acme/images/products/no-image.png">
                <br>
                <br />
                Inventory Price:<br>
                <input type="number" name="invPrice" id="invPrice">
                <br>
                <br />
                Inventory Stock:<br>
                <input type="number" name="invStock" id="invStock">
                <br>
                <br />
                Inventory Size<br>
                <input type="number" name="invSize" id="invSize">
                <br>
                <br />
                Inventory Weight<br>
                <input type="string" name="invWeight" id="invWeight">
                <br>
                <br />
                Inventory Location:<br>
                <input type="text" name="invLocation" id="invLocation">
                <br>
                <br />
                Category Id:<br>
                <input type="number" name="categoryId" id="categoryId">
                <br>
                <br />
                Inventory Vendor<br>
                <input type="text" name="invVendor" id="invVendor">
                <br>
                <br />
                Inventory Style<br>
                <input type="text" name="invStyle" id="invStyle">
                <br>
                <br />
                <br />
                <input type="submit" name="submit" value="Add Product">
                <input type="hidden" name="action" value="newProduct">   

                </form>
                </div>
            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>