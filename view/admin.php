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
            <?php
               if(!$_SESSION['loggedin']){
                   header('location: /acme/');
                   exit;
               } 
            ?>
            <nav>
                <?php echo $navList; ?>
            </nav>
            <main>
                <div  class="login-container">
                <h1>Welcome, <?php echo $_SESSION['clientData']['clientFirstname']; ?>! you are logged in</h1>
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                ?>

                    <ul class="user-data">
                        <li>First name: <?php echo $_SESSION['clientData']['clientFirstname']; ?></li>
                        <li>Last name: <?php echo $_SESSION['clientData']['clientLastname']; ?></li>
                        <li>Email address: <?php echo $_SESSION['clientData']['clientEmail']; ?></li>
                        <li>Client level: <?php echo $_SESSION['clientData']['clientLevel']; ?></li>
                    </ul>

                    <?php
                        if($_SESSION['clientData']['clientLevel'] > 1) {
                    ?>
                        <h2>You are allowed to:</h2>
                        <p><a href="/acme/products" title="Go to products page">Manage Products</a></p>
                    <?php
                        }
                    ?>

                </div>


            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>