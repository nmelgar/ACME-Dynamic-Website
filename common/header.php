<div class="header">
    <div class="header-left">
        <a href="/acme/" class="logo"><img id="logo" src="/acme/images/site/logo.gif" alt="Acme logo"></a>
    </div>    
    <div class="header-right">
        <?php if(isset($cookieFirstname)){
            echo "<span>Welcome $cookieFirstname</span>";
        } ?>
        <a href="/acme/accounts/index.php?action=login" class="account"><img id="account" src="/acme/images/site/account.gif" alt="Image of a folder">  My Account</a>
    </div>            
</div>
