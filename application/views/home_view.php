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
                        <li class='active'><a href="<?php echo base_url(); ?>/index.php/login/load_login_view"><span>Home</span></a></li>
                        <li class='has-sub'><a href='#'><span>Products</span></a>
                            <ul>
                                <li><a href='#'><span>Widgets</span></a></li>
                                <li><a href='#'><span>Menus</span></a></li>
                                <li class='last'><a href='#'><span>Products</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Company</span></a>
                            <ul>
                                <li><a href='#'><span>About</span></a></li>
                                <li class='last'><a href='#'><span>Location</span></a></li>
                            </ul>
                        </li>
                        <li class='last'><a href='#'><span>Contact</span></a></li>
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

