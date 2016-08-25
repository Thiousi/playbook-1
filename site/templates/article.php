<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php snippet('common/head_title') ?></title>

        <?php snippet('common/head_meta') ?>

        <?php snippet('common/head_js') ?>

        <?php snippet('common/head_css') ?>
    </head>
    <body class="<?php snippet('common/body_class') ?>">
        <!-- Wrapper -->
        <div id="wrapper">
            <?php snippet('common/header') ?>
            <?php snippet('common/nav') ?>
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <header>
                        <h1><p><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a> <i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $page->title() ?></p></h1>
                    </header>
                    <!-- Header Image  -->
                    <span class="image main"><?php $image = $page->image($page->headPic()); echo thumb($image, array('width' => 1600, 'height' => 450, 'crop' => true)) ?></span>
                    <!-- Link Section -->
                    <?php snippet('article/links') ?>
                    <!-- Pagination -->
                    <?php snippet('article/pagination-footer') ?>
                </div>
            </div>
            <!-- Footer -->
            <?php snippet('common/footer') ?>
        </div>
        <!-- JavaScript -->
        <?php snippet('common/foot_js') ?>
        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us6.list-manage.com","uuid":"5620b45bf4e59c45ad1b2c7fb","lid":"d5a1a63795"}) })</script>
    </body>
</html>
