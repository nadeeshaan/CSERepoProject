<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/shareDoc.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/shareDoc.js"></script>

        <!-- This script is called when the user chooses a project and then loads the relevent
             Documents to the document Drop down list
        -->
        <script type="text/javascript">
            function changeDocList() {

                emptyDropList(document.getElementById('documents'));
                element = document.getElementById('userProjects');
                projName = element.options[element.selectedIndex].value;
                
                //send an ajax call to get the relevent projects
                $.ajax({
                    type: "POST",
                    url: "http://localhost/CSERepositoryProject/index.php/ajaxData/getReleventProjects",
                    data: "projName=" + projName,
                    cache: false,
                    dataType: 'json',
                    success:
                            //grab the json output data
                            function(data) {
                                var i;
                                for (i = 0; i < data.length; i++) {
                                    //set the data for each option
                                    proj = data[i];
                                    element = document.createElement('option');
                                    element.value = proj.docid;
                                    element.innerHTML = proj.filename;
                                    element.id = proj.docid;
                                    document.getElementById('documents').appendChild(element);
                                }

                            }
                });
            }

            function emptyDropList(dropList) {
                var i;
                for (i = 0; i < dropList.options.length; i++) {
                    dropList.remove(i);
                }
            }
        </script>

        
    </head>
    <body>
        <div id='cssmenu'>
            <ul>
                <li class='active'><a id="homeBtn" href="<?php echo base_url(); ?>index.php/home/load_home_view"><span>Home</span></a></li>
                <li class='has-sub'><a id="DocsMenu" href='#'><span>Documents</span></a>
                    <ul style="opacity: 0.9">
                        <li><a href='#'><span>Search Documents</span></a></li>
                        <li><a id="docUpload" href="<?php echo base_url(); ?>index.php/upload"><span>Upload Documents</span></a></li>
                        <li><a id="myUploads" href='<?php echo base_url(); ?>index.php/my_uploads'><span>My Uploads</span></a></li>
<!--                        <li><a id="sharedwithMe" href='<?php echo base_url(); ?>index.php/myShared'><span>Notifications(<?php
                            echo count($shared2);
                        ?>)</span></a></li>-->
                    </ul>
                </li>
                <li class='last'><a href='<?php echo base_url(); ?>index.php/myProfile'><span>Profile</span></a></li>
                <li class='last'><a id="userLogout" href='<?php echo base_url(); ?>index.php/logout'>Logout</a></li>
                <li class='last'><a id="shareDocs" href='<?php echo base_url(); ?>index.php/shareDocs'>Share Docs</a></li>
            </ul>
        </div>

        <div class="pageHeader">
            <span id="mainHeading">CSE Central Project Repository</span><br>
        </div>
        <div class="pageTitle">Share Your Documents With Others</div>

        <div id="docShareContainer">
            <form id="shareDocsForm" action="<?php echo base_url(); ?>index.php/shareDocs/shareDocument" enctype="multipart/form-data" method="post">

                <table id="docShareTbl">

                    <tr>
                        <td><label for="userProjects">Projects</label></td>
                        <td>
                            <!-- Call the changeDoc list function when an option is selected -->
                            <select id="userProjects" name="userProjects" class="update" onchange="changeDocList();">
                                <option value='-1'>--Choose--</option>
                                <?php
                                foreach ($projects as $row) {
                                    echo '<option value="' . $row->projid . '">' . $row->projname . '</option>';
                                }
                                ?>
                            </select>
                        </td>

                        <td><label for="documents">Documents</label></td>
                        <td>
                            <select id="documents" class="update" name="documents"></select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="users">Select user</label></td>
                        <td>
                            <select id="users" name="users" class="update">
                                <?php
                                foreach ($users as $row) {
                                    echo '<option value="' . $row->username . '">' . $row->firstname . ' ' . $row->lastname . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" value="Share" class="docShareButton" id="docShareButton">
                        </td>
                    </tr>

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
