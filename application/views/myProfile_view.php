<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/shareDoc.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/myProfile.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>

        <script>
            $(function prepareList() {
                $('.expList').find('li:has(ul)').unbind('click').click(function(event) {
                    if (this == event.target) {
                        $(this).toggleClass('expanded');
                        $(this).children('ul').toggle('medium');
                    }
                    return false;
                }).addClass('collapsed').removeClass('expanded').children('ul').hide();

                //Hack to add links inside the cv
                $('.expList a').unbind('click').click(function() {
                    window.open($(this).attr('href'));
                    return false;
                });

                //Create the button functionality
                $('.expandList').unbind('click').click(function() {
                    $('.collapsed').addClass('expanded');
                    $('.collapsed').children().show('medium');
                })
                $('.collapseList').unbind('click').click(function() {
                    $('.collapsed').removeClass('expanded');
                    $('.collapsed').children().hide('medium');
                })
            });
        </script>
    </head>

    <body>
        <div id='cssmenu'>
            <ul>
                <li class='active'><a id="homeBtn" href="<?php echo base_url(); ?>index.php/home/load_home_view"><span>Home</span></a></li>
                <li class='has-sub'><a id="DocsMenu" href='#'><span>Documents</span></a>
                    <ul style="opacity: 0.9">
                        <li><a href='<?php echo base_url(); ?>index.php/search'><span>Search Documents</span></a></li>
                        <li><a id="docUpload" href="<?php echo base_url(); ?>index.php/upload"><span>Upload Documents</span></a></li>
                        <li><a id="myUploads" href='<?php echo base_url(); ?>index.php/my_uploads'><span>My Uploads</span></a></li>
                        <li><a id="sharedwithMe" href='<?php echo base_url(); ?>index.php/myShared'><span>Notifications(<?php
                                    echo count($shared);
                                    ?>)</span></a></li>
                    </ul>
                </li>
                <li class='last'><a id="shareDocs" href='<?php echo base_url(); ?>index.php/shareDocs'>Share Docs</a></li>
                <li class='last'><a href='<?php echo base_url(); ?>index.php/myProfile'><span>Profile</span></a></li>
                <li class='last'><a id="userLogout" href='<?php echo base_url(); ?>index.php/logout'>Logout</a></li>
            </ul>
        </div>

        <div class="pageHeader">
            <!--<span id="mainHeading">CSE Central Project Repository</span><br>-->
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>
        <div class="pageTitle">View And Edit Your Profile</div>

        <div id="myProfileContainer">
            <form form id="profileUpdate" method="post" name="profileUpdate" class="upload" action="<?php echo base_url(); ?>index.php/myprofile/updateProfile" enctype="multipart/form-data">
                <table id="myProfileTbl">
                    <tr>
                        <td>
                            <span><?php echo $profileData['firstname'] . '  ' . $profileData['lastname'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/uploads/<?php echo $profileData['username'] ?>/profilePics/DSC07848.jpg" id="proPic">        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr style="width: 600px">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Personal Information</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Full Name: <?php echo $profileData['firstname'] . ' ' . $profileData['lastname']; ?></span>
                            <ul class="expList">
                                <?php
                                echo
                                '<li>Edit
                                    <ul>
                                        <li>
                                            <input id="firstname" name="firstname" type="text" value="' . $profileData['firstname'] . '">
                                            <input id="lastname" name="lastname" type="text" value="' . $profileData['lastname'] . '">
                                        </li>
                                    </ul>
                                <li>';
                                ?>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Date of Birth: <?php echo $profileData['dob'] ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>About Me</span><br>
                            <textarea id="aboutme" name="aboutme" rows="4" cols="30"><?php echo $profileData['aboutme'] ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <hr style="width: 600px">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Contact Information</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>E-Mail: <?php echo $profileData['email']; ?></span>
                            <ul class="expList">
                                <?php
                                echo
                                '<li>Edit
                                    <ul>
                                        <li>
                                            <input id="email" name="email" type="email" value="' . $profileData['email'] . '">
                                        </li>
                                    </ul>
                                <li>';
                                ?>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Mobile: <?php echo $profileData['mobile']; ?></span>
                            <ul class="expList">
                                <?php
                                echo
                                '<li>Edit
                                    <ul>
                                        <li>
                                            <input id="mobile" name="mobile" type="text" value="' . $profileData['mobile'] . '">
                                        </li>
                                    </ul>
                                <li>';
                                ?>
                            </ul>
                        </td>
                    </tr>
                </table>
                <div>
                    <input type="submit" id="myProfBtn" class="sitebutton" value="Done Edit">
                </div>

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