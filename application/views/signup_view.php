<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/signup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <!--
        The date picker is implemented
        -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/jquery-ui.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/signupValidation.js"></script>
        <script>
            $(function() {
                $("#birthday").datepicker();
            });
        </script>
        
        <title>SignUp</title>
    </head>

    <body>
        <div class="pageHeader">
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>

        <div class="pageTitle">Create Your Account in CSE Project Repository</div>
        <div id="signupContainer">

            <form id="signupForm" method="post" name="signupForm" action="<?php echo base_url(); ?>index.php/signup/insertData" class="signup"  enctype="multipart/form-data">
                
                
                <table id="signUpTbl">
                    <tr>
                        <td><label for="firstname">First Name*</label></td>
                        <td><input type="text" id="firstname" name="firstname"><br><span id="fName"></span><br></td>

                        <td><label for="lastname">Last Name*</label></td>
                        <td><input type="text" id="lastname" name="lastname"><br><span id="lName"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="username">Index Number*</label></td>
                        <td><input type="text" id="username" name="username"><br><span id="iNum"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password*</label></td>
                        <td><input type="password" id="password" name="password"><br><span id="pswd"></span><br></td>

                        <td><label for="confirmPword">Confirm Password*</label></td>
                        <td><input type="password" id="confirmPword" name="confirmPword"><br><span id="cnpswd"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="email">E-mail*</label></td>
                        <td><input type="email" id="email" name="email"><br><span id="eml"></span><br></td>

                        <td><label for="mobile">Mobile Number</label></td>
                        <td><input type="text" id="mobile" name="mobile"><br><span id="mob"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="gender">Gender*</label></td>
                        <td colspan="2">
                            <select id="gender" name="gender"> 
                                <option value= '0'> Choose..</option> 
                                <option value='Male'>Male</option> 
                                <option value='Female'>Female</option> 
                            </select><br><span id="gndr"></span><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="birthday">Birth Day*</label></td>
                        <td colspan="2"><input type="text" name="birthday" id="birthday" placeholder="Birth Day" /><br><span id="bday"></span><br></td>
                    </tr>
                    
                    <tr>
                        <td><label for="aboutme">About Me</label></td>
                        <td colspan="2"><textarea id="aboutMe" name="aboutme"></textarea><br></td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <input name="picture" type="file" id="proPic">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Sign Up" class="sitebutton" id="signupBtn">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        
        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>
    </body>


</html>
