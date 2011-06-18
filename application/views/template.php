<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Premium Series
Description: A three-column, fixed-width blog design.
Version    : 1.0
Released   : 20090303

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Premium Series by Free CSS Templates</title>
        <meta name="keywords" content="" />
        <meta name="Premium Series" content="" />
        <link href="<?php echo base_url() ?>public/css/default.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <!-- start header -->
        <?php $this->load->view('header') ?>
        <!-- end header -->
        <div id="wrapper">
            <!-- start page -->

            <div id="page">
                <?php $this->load->view('left') ?>
                <!-- start content -->
                <div id="content">
                    <?php if (!empty($page)): ?>
                    <?php $this->load->view($page); ?> 
                    <?php else: ?>
                    <?php $this->load->view('error_page'); ?>
                    <?php endif; ?>
                        </div>
                        <!-- end content -->
                        <!-- start sidebars -->
                <?php $this->load->view('right') ?>
                            <!-- end sidebars -->
                            <div style="clear: both;">&nbsp;</div>
                        </div>
                        <!-- end page -->
                    </div>
        <?php $this->load->view('footer') ?>
    </body>
</html>
