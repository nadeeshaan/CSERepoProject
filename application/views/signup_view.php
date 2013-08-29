<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/signup.css">
    </head>

    <body>
        <h1>Create Your Account in CSE Project Repository</h1>

        <form id="signupForm" method="post" name="signupForm" class="signup" action="<?php echo base_url(); ?>index.php/signup" enctype="multipart/form-data">
            <?php echo validation_errors(); ?>
            <?php echo form_open('signupForm'); ?>
            <label for="firstname">First Name</label><br>
            <input type="text" id="firstname" name="firstname"><br>

            <label for="lastname">Last Name</label><br>
            <input type="text" id="lastname" name="lastname"><br>

            <label for="username">Index Number</label><br>
            <input type="text" id="username" name="username"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="confirmPword">Confirm Password</label><br>
            <input type="password" id="confirmPword" name="confirmPword"><br>

            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="mobile">Mobile Number</label><br>
            <input type="text" id="mobile" name="mobile"><br>

            <label for="aboutme">About Me</label><br>
            <input type="text" id="aboutMe" name="aboutme"><br>

            <label for="gender">Gender</label><br>
            <select name="gender" id="gender"> 
                <option value= '0'> Choose..</option> 
                <option value='Male'>Male</option> 
                <option value='Female'>Female</option> 
            </select><br>


            <label for="bday">Birth Day</label>
            <input type="text" id="year" name="year" placeholder="Year">
            <select name="month" id="month"> 
                <option value="0"> Month </option> 
                <option value="1">January</option> <option value="2">February</option>
                <option value="3">March</option> <option value="4">April</option>
                <option value="5">May</option> <option value="6">June</option>
                <option value="7">July</option> <option value="8">August</option>
                <option value="9">September</option> <option value="10">October</option>
                <option value="11">November</option> <option value="12">December</option>
            </select>

            <input type="text" id="date" name="date" placeholder="Date"><br>
            <input name="picture" type="file" />
            <input type="submit" >
        </form>


    </body>


</html>
