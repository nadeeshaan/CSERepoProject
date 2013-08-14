<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/login.css">
    </head>

    <body>
        <!--<div class="container">-->
            <div id="loginContainer">
                <div id="header">
                    Please Login to Continue
                </div>
                <form class="login" onsubmit="return false">
                    <h1>CSE Project Repository</h1>
                    <input type="email" name="email" class="login-input" placeholder="Email Address" autofocus>
                    <input type="password" name="password" class="login-input" placeholder="Password">
                    <input type="submit" value="Login" class="login-submit">
                    <p class="login-help"><a href="#">Forgot password?</a></p>
                </form>
            </div>
        <!--</div>-->

    </body>
</html>



