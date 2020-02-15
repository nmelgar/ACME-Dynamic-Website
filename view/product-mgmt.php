<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ACME</title>
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
                
            <h1>Product Management</h1>
                <p>Welcome to the product management page. Please choose an option:</p>
                <ul>
                    <li><a href="../products/index.php?action=newCat" title="Add new categoy">Add a new category</a></li>
                    <li><a href="../products/index.php?action=newProduct" title="Add new product">Add a new product</a></li>

                </ul>
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                ?>
                

            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>