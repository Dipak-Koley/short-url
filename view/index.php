<?php
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Url Shortner By Dipak Koley</title>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="google-signin-client_id" content="726321899109-7gt977vcihofpm5b99dat56i2kshjo8j.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
        <script type="text/javascript" src="./js/main.js"></script>  
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="nav">
            <div class="name">
                This is name
            </div>
            <div class="tab">
                <?php
                    if(isset($_SESSION['user_id']))
                        echo '<div class="g-signin2" data-onsuccess="gmailLogIn"></div>';
                    else
                        echo '<a href="javascript:void(0)" onclick="logout()">Logout</a>';
                ?> 
            </div>
        </div>
        <div class="content">
            This sis content
        </div>
    </body>
    
</html>