<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/nivoStyle.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/nivo-slider.css" media="screen">        
        <script src="<?php echo base_url(); ?>/jScripts/jquery-1.9.1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/jScripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
        
        <title>Welcome:Home</title>

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
                <li class='last'><a href='<?php echo base_url(); ?>index.php/logout'>Logout</a></li>
            </ul>
        </div>

        <div class="pageHeader">
            <span id="mainHeading">CSE Central Project Repository</span><br>
        </div>
        <div class="container">
            <div id="slider" class="slider-wrapper">
                <img src="<?php echo base_url(); ?>/images/pic1.jpg" alt=""/>
                <img src="<?php echo base_url(); ?>/images/pic2.jpg" alt=""/>
                <img src="<?php echo base_url(); ?>/images/pic3.jpg" alt="" />
                <img src="<?php echo base_url(); ?>/images/pic4.jpg" alt="" />
                <img src="<?php echo base_url(); ?>/images/pic5.jpg" alt="" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
        <div class="pageFooter">
            <span id="copyright">&#169 Copyright Nadeeshaan Gunasinghe</span><br>
            <span id="dept">Department of Computer Science and Engineering</span>
            <a id="myemail" href="mailto:nadeeshaangunasinghe@gmail.com"><span>Email Me</span></a>
            <a id="blog" href="http://www.nadeeshaan.blogspot.com/"><span>Blogger</span></a>
        </div>

        <script>
            $('#slider').nivoSlider({
                effect: 'boxRainGrowReverse'
            });
        </script>
    </body>

</html>

