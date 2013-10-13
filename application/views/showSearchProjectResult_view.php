<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/showSearchProjectResult.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/searchResult.css">
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
                <li class='last'><a id="userLogout" href='<?php echo base_url(); ?>index.php/logout'><span>Logout</span></a></li>
            </ul>
        </div>

        <div class="pageHeader">
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>

        <div id='searchDocContainer' name='searDocContainer'>
            
                    <div id="projRslt" name="projRslt">
                        <?php
                                foreach ($projData as $pd) {
                                    echo '<div id="description">
                                            <span>Project Name: '. $pd->projname.'<br>';
                                
                                echo 
                                    '<span>Project Description: '. $pd->projdescription.'</div>';
                                }
                               
                                echo '<div id="test">';
                                foreach ($allDocs as $ad) {
                                    echo '<div id="outer">
                                            <span>Document Name: '. $ad->filename;
                                    echo 
                                        '<br><span>Document Description: '. $ad->description;
                                    
                                    if($ad->privilege==='1'){
                                        echo '<br><a href="'.base_url().'index.php/showSearchResult/getDocumentData?id='.$ad->projid.'" target="_blank">Download</a></div><hr>';
                                    }
                                    else if($ad->privilege==='2'){
                                        echo '<br><a href="/uploads/' . $ad->username . '/projects/' . $ad->projname . '/' . $ad->filename . '" target="_blank">Download</a></div><hr>';
                                    }
                                }
                                echo '</div>';
                        ?>
                    </div>
        </div>

        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>

    </body>
</html>
