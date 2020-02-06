<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ACME Registration</title>
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
                <h1>Registration !</h1>
                <p>All fields are required</p>

                <form action="/acme/accounts/index.php" method="post">
                First Name:<br>
                <input type="text" name="clientFirstname" id="clientFirstname">
                <br>
                Last Name:<br>
                <input type="text" name="clientLastname" id="clientLastname">
                <br>
                Email:<br>
                <input type="email" name="clientEmail" id="clientEmail">
                <br>
                Password:<br>
                <input type="password" name="clientPassword" id="clientPassword">
                <br><br>
                <input type="submit" name="submit" value="Registration">   

                </form>
            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>