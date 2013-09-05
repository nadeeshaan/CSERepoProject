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
    </head>

    <body>
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href="<?php echo base_url(); ?>index.php/home/load_home_view"><span>Home</span></a></li>
                <li class='has-sub'><a href='#'><span>Documents</span></a>
                    <ul style="opacity: 0.9">
                        <li><a href='#'><span>Search Documents</span></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/upload"><span>Upload Documents</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/my_uploads'><span>My Uploads</span></a></li>
                    </ul>
                </li>
                <li class='last'><a href='#'><span>Profile</span></a></li>
                <li class='last'><a href='<?php echo base_url(); ?>index.php/logout'><span>Logout</span></a></li>
            </ul>
        </div>
        <div class="pageHeader">
            <span id="mainHeading">CSE Central Project Repository</span><br>
        </div>
        <div class="container">
            <div id="projectContainer" style="position: absolute">
                <ul id="expList">
                    <?php
                    foreach ($myprojects as $prjs) {
                        echo
                        '<li>' . $prjs->projname .
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
                                 <a href="/uploads/' . $doc->username . '/projects/' . $prjs->projname . '/' . $doc->filename . '" target="_blank">Download</a>';
                            }
                        }
                        echo
                        '</li>
                       </ul>
                   </li><hr>';
                    }
                    ?>
                </ul>
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
