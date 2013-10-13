<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/myShared.css"> 
        <script src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js" type="text/javascript"></script>
        
        <script>
            $(function prepareList() {
                $('#expList').find('li:has(ul)').unbind('click').click(function(event) {
                    if (this == event.target) {
                        $(this).toggleClass('expanded');
                        $(this).children('ul').toggle('medium');
                    }
                    return false;
                }).addClass('collapsed').removeClass('expanded').children('ul').hide();

                //Hack to add links inside the cv
                $('#expList a').unbind('click').click(function() {
                    window.open($(this).attr('href'));
                    return false;
                });

                //Create the button functionality
                $('#expandList').unbind('click').click(function() {
                    $('.collapsed').addClass('expanded');
                    $('.collapsed').children().show('medium');
                })
                $('#collapseList').unbind('click').click(function() {
                    $('.collapsed').removeClass('expanded');
                    $('.collapsed').children().hide('medium');
                })
            });
        </script>

        <title>My Shared</title>
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
            <img src="<?php echo base_url(); ?>/images/siteBanner.png" class="resize">
        </div>
        
        <div class="pageTitle">Shared Documents With You</div>
        
        <div id="mySharedContainer">
            <div id="projectContainer" style="position: absolute">
                <form id="wrapper" action="<?php echo base_url(); ?>index.php/myShared/changeNotified">
                    
                        <ul id="expList">
                        <?php
                        if(count($shared)>0){
                            foreach ($shared as $shr) {
                                echo
                                '<li id="mainLi" >' . $shr->fname .
                                '<ul>
                                    <li>See more
                                            <ul>
                                                <li>
                                                    <span>Owner: ' . $shr->username . '</span><br>
                                                    <span>Document Description: </span><br>
                                                    <span>---' . $shr->des . '</span>
                                                </li>
                                            </ul>
                                        </li>
                                    <li>'.
                                    '<a href="' . base_url() . 'index.php/myShared/changeNotified?decision=' . 1 . '&docid='. $shr->docid .'" id="acceptLnk">Accept</a>'.
                                    '<a href="' . base_url() . 'index.php/myShared/changeNotified?decision=' . 0 . '&docid='. $shr->docid .'" id="rejectLnk">Reject</a>';
    //                            foreach ($prjdocs as $doc) {
    //                                if ($doc->projid === $shared->projid) {
    //                                    echo
    //                                    '<div id=filename>' .
    //                                    $doc->filename .
    //                                    '</div>
    //                                     <a href="/uploads/' . $doc->username . '/projects/' . $prjs->projname . '/' . $doc->filename . '" target="_blank">Download</a>';
    //                                }
    //                            }
                                echo
                                '</li>
                               </ul>
                           </li><hr id="seperator">';
                            }
                        }
                        else{
                            echo 'You have no shared Documents with you At the Moment';
                        }
                        ?>
                    </ul>
                    
<!--                    <input type="submit" value="Accept" class="myShareButton" id="myShareButton">-->
                </form>
                
            </div>
        </div> 
        
        <!--Set the footer -->
        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>
        
    </body>
</html>
