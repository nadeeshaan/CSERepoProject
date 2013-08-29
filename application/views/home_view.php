<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
    </head>

    <body>
        <div class="container">
            <div class="Loginheader">
                <div id='cssmenu'>
                    <ul>
                        <li class='active'><a href="<?php echo base_url(); ?>index.php/login"><span>Home</span></a></li>
                        <li class='has-sub'><a href='#'><span>Documents</span></a>
                            <ul>
                                <li><a href='#'><span>Search Documents</span></a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/upload"><span>Upload Documents</span></a></li>
                                <li><a href='#'><span>My Uploads</span></a></li>
                            </ul>
                        </li>
                        <li class='last'><a href='#'><span>Profile</span></a></li>
                        <li class='last'><a href='<?php echo base_url(); ?>index.php/logout'><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>

            <?php
            $this->load->view("slideShow_view");
            ?>

            <?php
            $this->load->view("content_view");
            ?>

            <?php
            $this->load->view("footer_view");
            ?>
        </div>
    </body>

</html>

