<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/myUploads.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>


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

        <title>MyUploads</title>

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

        <div id="projectContainer">
            <ul id="expList">
                <div id="test">
                            <?php
                            foreach ($myprojects as $prjs) {
                                    echo
                                    '<li id=mainLi>' . $prjs->projname .
                                    '<ul>
                                        <li>See more
                                                <ul>
                                                    <li>
                                                        <span>' . $prjs->projdescription . '</span><br>
                                                        <span>Started on: ' . $prjs->startdate . '</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        <li>';
                                    foreach ($prjdocs as $doc) {
                                        if ($doc->projid === $prjs->projid) {
                                            echo
                                            '<div id=filename>' .
                                            $doc->filename .
                                            '</div>
                                             <a href="/uploads/' . $doc->username . '/projects/' . $prjs->projname . '/' . $doc->filename . '" target="_blank" id="linkText">Download</a>
                                             <a href="'.base_url().'index.php/docComments/showDocComments?id='.$doc->docid.'" target="_blank" id="linkText">Comments</a>';
                                        }
                                    }
                                    echo
                                    '</li>
                                   </ul>
                               </li><hr id="seperator">';
                            }
                            ?>
                    </div>
                        </ul>

        </div>
        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>
    </body>
</html>
