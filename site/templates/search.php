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
                    <h1><?php echo $page->title() ?></h1>

                    <?php if ($page->cover()->isNotEmpty()): ?>
                        <span class="image main"><img src="<?php echo $page->image($page->cover())->url() ?>" alt="" /></span>
                    <?php endif; ?>

                    <form>
                      <input type="search" name="q" value="<?php echo esc($query) ?>">
                      <input type="submit" value="Search">
                    </form>
                    <h1><?php echo $page->results() ?></h1>
                    <ul>
                      <?php foreach($results as $result): ?>
                      <li>
                        <a href="<?php echo $result->url() ?>">
                          <?php echo $result->title()->html() ?>
                        </a>
                      </li>
                      <?php endforeach ?>
                    </ul>

                    <?php echo $page->text()->kirbytext() ?>
                </div>
            </div>
            <!-- Footer -->
            <?php snippet('common/footer') ?>
        </div>
        <?php snippet('common/foot_js') ?>
        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us6.list-manage.com","uuid":"5620b45bf4e59c45ad1b2c7fb","lid":"d5a1a63795"}) })</script>
    </body>
</html>
