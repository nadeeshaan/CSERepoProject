<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/login.css">
        
        

    </head>

    <body>
        <section class="loginContainer">
            <div id="header">
                <div id="header2">
                    <a href='<?php echo base_url(); ?>index.php/signup'><button type="button" id="signup">Sign Up</button></a>
                </div>
            </div>
            <div class="loginBody">
                <h1>Login</h1>
                <form id="loginForm" method="post" name="loginForm" class="login" action="<?php echo base_url(); ?>index.php/login/formSubmit">
                    <div id="labels">
                        <label for="index">Index Number</label><br>
                        <input type="text" id="index" name="index"><br>
                    </div>
                    <div id="labels">
                        <label for="pword">Password</label><br>
                        <input type="password" id="pword" name="pword"><br>
                    </div>
                    <div id="labels">
                        <label>
                            <input type="checkbox" id="remindMe" name="remindMe" >
                            Remind Me
                        </label>
                        <input type="submit" value="Submit" id="submit">
                    </div>
                    <?php if(! is_null($msg)) echo $msg;?>
                </form>
            </div>
        </section>
    </body>
</html>



