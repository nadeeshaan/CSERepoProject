<html>
    <head>
        <!--
        The date picker is implemented
        -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/jquery-ui.css" />
        <script src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#startdate").datepicker();
            });
        </script>
        <!--end of the date picker-->

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
        <h1>Welcome to Document Upload Area</h1>
        <form id="uploadForm" method="post" name="uploadForm" class="upload" action="<?php echo base_url(); ?>index.php/upload" enctype="multipart/form-data">

            <?php echo validation_errors(); ?>
            <?php echo form_open('signupForm'); ?>
            <label for="newProject">Project Name</label><br>

            <!--
                Create a editable drop down list for choosing projects
                When the option of the drop down list selected the method changeTextBox() is called
            -->
            <select style="width: 200px; float: left;" onchange="changetextBox()" name="dropList">
                <option value='0'></option>
                <?php
                foreach ($projects as $project) {
                    echo '<option value="' . $project->projid . '">' . $project->projname . '</option>';
                }
                ?>
            </select>
            <input name="selectedText" style="width: 185px; margin-left: -199px; margin-top: 1px; border: none; float: left;"/><br>
            <!-- 
                end of creating the editable drop down list
            -->

            <label for="projDescription">Add Project description</label><br>
            <br><textarea name="projDescription" id="projDescription" rows="3" cols="25" placeholder="Enter Description"></textarea><br>

            <label for="startdate">Start Date</label>
            <input type="text" name="startdate" id="startdate" placeholder="Start Date" /><br>

            <br><input name="document" type="file"/><br>
            <br><textarea name="docDescription" rows="3" cols="25" placeholder="Enter Document Description"></textarea><br>

            <br><label for="privillege">Privilage</label><br>
            <br><select name="privillege">
                <option value='0'>Choose..</option>
                <option value='1'>View & Download</option>
                <option value='2'>View Only</option>
            </select><br>

            <br><input type="submit" name="upload" value="Upload">
        </form>

    </body>
</html>
