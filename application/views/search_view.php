<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/search.css">

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
                                    echo $sharedCount;
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

        <div id="searchContainer">
            <form id="searchDoc" method="post" name="searchDoc" class="upload" action="<?php echo base_url(); ?>index.php/search/createTokens" enctype="multipart/form-data">
                <table id="searchHeader">

                    <tr id="str">
                        <td id="std">
                            <input id="projectSearch" type="radio" name="select" value="projectSearch"><span>Projects</span>
                        </td>
                        <td id="std">
                            <input id="documentSearch" type="radio" name="select" value="documentSearch" checked="TRUE"><span>Documents</span>
                        </td>
                    </tr>
                    <tr id="str">
                        <td colspan="2" id="std">
                            <input id="SearchFld" name="SearchFld" type="text"><input type="submit" value="Search" class="searchbutton">
                        </td>
                    </tr>
                </table>

                <table id="searcResultTbl">
                    <?php
                    if ($selectedButton === 'document') {
                        if (count($results) > 0) {
                            foreach ($results as $doc) {

                                echo '<tr id="docs">
                                        <td id="docsCell">' .
                                '<span>'.$doc->filename .'</span><br><a href="' . base_url() . 'index.php/showSearchResult/getDocumentData?id=' . $doc->docid . '" target="_blank" id="searchLink">Explore More</a><hr>'
                                . '<td>
                                      <tr>';
                            }
                        } else {
                            echo 'No items found';
                        }
                    } else if ($selectedButton === 'project') {
                        if (count($results) > 0) {
                            foreach ($results as $proj) {

                                echo '<tr id="prjs">
                                        <td id="docsCell">' .
                                '<span>'.$proj->projname .'</span><br><a href="' . base_url() . 'index.php/showSearchResult/getProjectData?id=' . $proj->projid . '" target="_blank" id="searchLink">Explore More</a><hr>'
                                . '<td>
                                      <tr>';
                            }
                        } else {
                            echo 'No items found';
                        }
                    }
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
