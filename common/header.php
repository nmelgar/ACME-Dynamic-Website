<div class="header">
    <div class="header-left">
        <a href="/acme/" class="logo"><img id="logo" src="/acme/images/site/logo.gif" alt="Acme logo"></a>
    </div>    
    <div class="header-right">
        <?php if(isset($cookieFirstname)){
            echo "<span>Welcome $cookieFirstname</span>";
        } ?>

        <?php
            if (isset($_SESSION['loggedin'])){ ?>
                <a href="/acme/accounts/index.php?action=logout" class="account"><img id="account" src="/acme/images/site/account.gif" alt="Image of a folder"> Logout</a>
            <?php } else { ?>
                <a href="/acme/accounts/index.php?action=login" class="account"><img id="account" src="/acme/images/site/account.gif" alt="Image of a folder">  My Account</a>
            <?php }
        ?>
    </div>            
</div>
