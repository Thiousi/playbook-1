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
            <!-- Header -->
            <?php snippet('common/header') ?>
            <?php snippet('common/nav') ?>
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <header>
                        <h1><?php echo $page->title()->kirbytext() ?></h1>
                    </header>
                    <?php echo $page->head_text()->kirbytext() ?>
                    <div class="btn-center"><a href="<?php echo $page->children()->first()->url() ?>"><div class="sign-up-btn btn-chapter"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Start here</div></a></div>
                    <h2 class="article-overview">Articles</h2>
                    <?php snippet('article/overview') ?>
                    <?php snippet('article/chapter-navigation') ?>
                </div>
            </div>
            <!-- Footer -->
            <?php snippet('common/footer') ?>
        </div>
        <!-- Footer Javascript -->
        <?php snippet('common/foot_js') ?>
        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us6.list-manage.com","uuid":"5620b45bf4e59c45ad1b2c7fb","lid":"d5a1a63795"}) })</script>
    </body>
</html>
