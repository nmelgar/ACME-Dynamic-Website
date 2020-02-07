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
                <h1>Login here!</h1>
                <p>*All fields are required*</p>

                <form action="/acme/accounts/index.php" method="post">
                Email:<br>
                <input type="email" name="clientEmail" id="clientEmail">
                <br>
                <br />
                Password:<br>
                <input type="password" name="clientPassword" id="clientPassword">
                <br><br>
                <input type="submit" name="submit" value="Login">   

                </form>
                <br />
                <h2>Do you want an account?</h2>
                <a href="/acme/accounts/index.php?action=registration">Get an account here :)</a>
                </div>
            </main>

 
            <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>