<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/login.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>jScripts/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jScripts/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jScripts/jquery.validate.js"></script>

        <script>
            $(function() {
                $("#loginForm").validate({
                    rules: {
                        index: {
                            required: true
                        },
                        pword: {
                            required: true
                        }
                    },
                    messages: {
                        index: {
                            required: "  Please enter Index"
                        },
                        pword: {
                            required: "  Please enter a Password"
                        }
                    }
                });
            });

        </script>

    </head>

    <body>
        <section class="loginContainer">
            <div id="header"></div>
            <div class="loginBody">
                <h1>Login</h1>
                <?php echo validation_errors(); ?>
                <?php echo form_open('authenticateUser'); ?>
                <form id="loginForm" method="post" name="loginForm" class="login">
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
                </form>

            </div>
        </section>
    </body>
</html>



