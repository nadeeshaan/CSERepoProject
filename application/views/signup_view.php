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
    </head>

    <body>
        <div class="pageHeader">
            <span id="mainHeading">CSE Central Project Repository</span><br>
        </div>

        <div id="signupHeading">Create Your Account in CSE Project Repository</div>
        <div id="signupContainer">

            <form id="signupForm" method="post" name="signupForm" class="signup" action="<?php echo base_url(); ?>index.php/signup" enctype="multipart/form-data">
                <!--        <?php echo validation_errors(); ?>
                <?php echo form_open('signupForm'); ?>
                -->
                <table id="signUpTbl">
                    <tr>
                        <td><label for="firstname">First Name</label></td>
                        <td><input type="text" id="firstname" name="firstname"><span id="fName"></span><br></td>

                        <td><label for="lastname">Last Name</label></td>
                        <td><input type="text" id="lastname" name="lastname"><span id="lName"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="username">Index Number</label></td>
                        <td><input type="text" id="username" name="username"><span id="iNum"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" id="password" name="password"><span id="pswd"></span><br></td>

                        <td><label for="confirmPword">Confirm Password</label></td>
                        <td><input type="password" id="confirmPword" name="confirmPword"><span id="cnpswd"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="email">E-mail</label></td>
                        <td><input type="email" id="email" name="email"><span id="eml"></span><br></td>

                        <td><label for="mobile">Mobile Number</label></td>
                        <td><input type="text" id="mobile" name="mobile"><span id="mob"></span><br></td>
                    </tr>

                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td colspan="2">
                            <select name="gender" id="gender"> 
                                <option value= '0'> Choose..</option> 
                                <option value='Male'>Male</option> 
                                <option value='Female'>Female</option> 
                            </select><span id="gndr"></span><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="birthday">Birth Day</label></td>
                        <td colspan="2"><input type="text" name="birthdaty" id="birthday" placeholder="Birth Day" /><span id="bday"></span><br></td>
                    </tr>
                    
                    <tr>
                        <td id="txt"><label for="aboutme">About Me</label></td>
                        <td colspan="2"><textarea rows="10" id="aboutMe" name="aboutme"></textarea><br></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input name="picture" type="file">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Sign Up" class="signwinbutton" id="signupBtn">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

<!--                <input type="text" id="year" name="year" placeholder="Year">
<select name="month" id="month"> 
    <option value="0"> Month </option> 
    <option value="1">January</option> <option value="2">February</option>
    <option value="3">March</option> <option value="4">April</option>
    <option value="5">May</option> <option value="6">June</option>
    <option value="7">July</option> <option value="8">August</option>
    <option value="9">September</option> <option value="10">October</option>
    <option value="11">November</option> <option value="12">December</option>
</select>-->
        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>
    </body>


</html>
