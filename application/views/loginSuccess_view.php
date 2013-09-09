<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/welcomeMsg.css">
    </head>

    <body>
            
        <div class="welcomeContainer">
            <table id='heading' class="welcomeMessage">
                <tr>
                    <td>Welcome</td>
                </tr>
                <tr>
                    <td>to</td>
                </tr>
                <tr>
                    <td>CSE Central Project Repository</td>
                </tr>
            </table>
            <img src="<?php echo base_url(); ?>/images/welcome.gif" class="resize">         
            
<!--            <input type="button" value="Login" class="sitenbutton" id="welcomeButton">-->
            <a href='<?php echo base_url(); ?>index.php/login'><button type="button" id="welcomeButton" class="sitenbutton">Login</button></a>
            
        </div>

        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>
    </body>
</html>
