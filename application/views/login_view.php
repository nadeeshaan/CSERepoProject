<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/login.css">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery.validate.min.js"></script>
        <!--<script src="<?php echo base_url(); ?>/jScripts/loginValidation.js"></script>-->

        <title>Login</title>
    </head>

    <body>
        <div class="pageHeader">
<!--            <span id="mainHeading">CSE Central Project Repository</span><br>-->
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>
        
        <div class="pageTitle" style="font-size: 24;">Login</div>
        <section class="loginContainer">
            <div class="loginBody">
                <form id="loginForm" method="post" name="loginForm" class="login" action="<?php echo base_url(); ?>index.php/login/formSubmit">
                    <table id="loginTable">
                        <tr>
                            <td><label for="index">Index Number</label></td>
                            <td><input type="text" id="index" name="index"><br></td>
                        </tr>
                        <tr>
                            <td><label for="pword">Password</label></td>
                            <td><input type="password" id="pword" name="pword"><br></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="checkbox" id="remindMe" name="remindMe" >Remind Me</td>
                        </tr>
                        <tr>
                            <td class="buttonrw"><input type="submit" value="Login" id="submit" class="logwinbutton"></td>
                            <td class="buttonrw"><a href='<?php echo base_url(); ?>index.php/signup'><button type="button" id="signup" class="logwinbutton">Sign Up</button></a></td>
                        </tr>
                        <!-- Set the error message visible if the login is invalid -->
                        <tr><td colspan="2" class="error"><?php if (!is_null($msg)) echo $msg; ?></td></tr>
<!--                        <tr><td colspan="2" id="loginError"></td></tr>-->
                    </table>

                </form>
            </div>
        </section>

        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>

    </body>
</html>



