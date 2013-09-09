<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/docUpload.css">
        <!--
        The date picker is implemented
        -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/jquery-ui.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/uploadValidation.js"></script>

        <script type="text/javascript">
            //This method is responsible for loading the selected option of the dropdown list to the text field 
            function changetextBox() {
                index = document.uploadForm.dropList.selectedIndex;

                if (index > 0) {
                    document.uploadForm.selectedText.value = document.uploadForm.dropList.options[index].text;
                    //when the previous projects selected project description and start date disables
                    $('#projDescription').attr("disabled", true);
                    $('#startdate').attr("disabled", true);

                }
                else {
                    //when new projects entered project description and start date re enable
                    $('#projDescription').attr("disabled", false);
                    $('#startdate').attr("disabled", false);
                    document.uploadForm.selectedText.value = '';
                }
            }

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

        <div id="uploadHeading">Create Your Account in CSE Project Repository</div>

        <div id="uploadContainer">
            <!--<h1>Welcome to Document Upload Area</h1>-->
            <form id="uploadForm" method="post" name="uploadForm" class="upload" action="<?php echo base_url(); ?>index.php/upload/uploadFiles" enctype="multipart/form-data">

                <table id="docuploadTbl">

                    <tr>
                        <td>
                            <label for="newProject">Project Name</label><br>
                        </td>
                        <td>
                            <!--Create a editable drop down list for choosing projects
                            When the option of the drop down list selected the method changeTextBox() is called
                            -->
                            <select style="float: left;" onchange="changetextBox()" name="dropList">
                                <option value='0'></option>
                                <?php
                                foreach ($projects as $project) {
                                    echo '<option value="' . $project->projid . '">' . $project->projname . '</option>';
                                }
                                ?>
                            </select>
                            <input id="selectedText" name="selectedText" style="width: 170px; margin-left: -199px; margin-top: 1px; border: none; float: left;"/><span id="project">*</span><br>
                        </td>
                    </tr>
                    <!--end of creating the editable drop down list-->

                    <tr>
                        <td>
                            <label for="projDescription">Add Project description</label><br>
                        </td>
                        <td>
                            <br><textarea name="projDescription" id="projDescription" rows="3" cols="25" placeholder="Enter Description"></textarea><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="startdate">Start Date</label>
                        </td>
                        <td>
                            <input type="text" name="startdate" id="startdate" placeholder="Start Date" /><span id="strtDate"></span><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="document">Choose File</label><br>
                        </td>
                        <td>
                            <br><input id="document" name="document" type="file"/><span id="selectedFile">*</span><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="docDescription">Document Description</label>
                        </td>
                        <td>
                            <br><textarea name="docDescription" rows="3" cols="25" id="docDescription"></textarea><span id="desText">*</span><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><label for="privilege">Privilege</label><br>
                        </td>
                        <td>
                            <br><select id="privilege" name="privilege">
                                <option value='0'>Choose..</option>
                                <option value='1'>View & Download</option>
                                <option value='2'>View Only</option>
                            </select><span id="privilegeText">*</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><input class="sitenbutton" type="submit" name="upload" value="Upload">
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
