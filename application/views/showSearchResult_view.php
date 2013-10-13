<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
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
            <form id="searchDocData" method="post" name="searchDocData" action="<?php echo base_url(); ?>index.php/showSearchResult/sendEmail?id=<?php echo $did; ?>" enctype="multipart/form-data">

                <table id='docRslt' name='docRslt'>
                    <?php
                    if($selected==='doc'){
                        foreach ($docData as $dd) {
                            echo '<tr>
                                    <td>
                                        <span>Document Name: '. $dd->filename.'
                                    <td>
                                  <tr>';
                            
                            echo '<tr>
                                    <td>
                                        <span>Description: '. $dd->description.'
                                    <td>
                                  <tr>';
                            
                            echo '<tr>
                                    <td>
                                        <span>Owner: '. $dd->firstname.' '.$dd->lastname.'
                                    <td>
                                  <tr>';
                                                                                  
                            
                            if($dd->dPrivi==1){
                                echo '<tr>
                                    <td>
                                        <a href="/uploads/' . $dd->username . '/projects/' . $dd->projname . '/' . $dd->filename . '" target="_blank">Download</a>
                                    <td>
                                  <tr>';
                                
                                echo '<tr>
                                    <td>
                                        <span>Comment</span><br><br>
                                        <textarea id="docComment" name="docComment" class="rsltTxtArea"></textarea>
                                    <td>
                                  <tr>';
                                
                                echo '<tr>
                                    <td>
                                        <input type="submit" id="rsltBtn" name="commentBtn" value="Add Comment" class="sitebutton">
                                    <td>
                                  <tr>';
                            }
                            
                            else if($dd->dPrivi==2){
                                
                                echo '<tr>
                                    <td>
                                        <span>This Document is Hidden.You can send a request to the owner for the document</span>
                                    <td>
                                  <tr>';                                
                                
                                echo '<tr>
                                    <td>
                                        <span>Request</span><br><br>
                                        <textarea id="requestEmail" name="requestEmail" class="rsltTxtArea"></textarea>
                                    <td>
                                  <tr>';
                                
                                echo '<tr>
                                    <td>
                                        <input type="submit" id="rsltBtn" name="requestBtn" value="Send Request" class="sitebutton" >
                                    <td>
                                  <tr>';
                            } 
                        }
                    }
                    
//                    else if($selected==='proj'){
//                        foreach ($projData as $pd) {
//                            echo 'Nadee';
//                        }
//                    }
                    ?>
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
