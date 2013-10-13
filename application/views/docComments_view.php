<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/docComments.css">


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
                                    echo count($sharedCount);
                                    ?>)</span></a></li>
                    </ul>
                </li>
                <li class='last'><a id="shareDocs" href='<?php echo base_url(); ?>index.php/shareDocs'>Share Docs</a></li>
                <li class='last'><a href='<?php echo base_url(); ?>index.php/myProfile'><span>Profile</span></a></li>
                <li class='last'><a id="userLogout" href='<?php echo base_url(); ?>index.php/logout'><span>Logout</span></a></li>
                
            </ul>
        </div>

        <div class="pageHeader">
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>

        <div id="docCommentContainer">
            
            <table id="commentTable">
                <?php
                    foreach ($comments as $cmnts) {
                        echo 
                            '
                             <div id=wrap>
                                <tr>
                                   <td>
                                       BY:'.$cmnts->firstname." ".$cmnts->lastname."<br>".$cmnts->comment."<br>Date: ".$cmnts->addeddate.' 
                                   </td>
                                </tr>
                             </div>
                             ';
                    }
                ?>
            </table>

        </div>

        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>

    </body>
</html>