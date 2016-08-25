<?php if ($page->links()->isNotEmpty()): ?>
    <div class="row">
        <div class="8u 12u$(medium)">
            <section>
                <h2>Links</h2>
                    <?php foreach ($page->links()->toStructure() as $item): ?>
                        <div class="links">
                            <a href="<?php echo $item->link_url() ?>" target="_blank"><img src="<?php echo image($item->link_pic())->url() ?>" class="image left link-image"><h4 class="link-heading"><?php echo $item->link_name()?></h4></a><p class="link-text"><?php echo $item->link_text()->kirbytext() ?>
                            <a href="<?php echo $item->link_url() ?>" target="_blank"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Visit <?php echo $item->link_name()?></a>
                        </div>
                    <?php endforeach; ?>
            <div class="links">
                <a href="mailto:playbook@purplesquirrel.io" target="_blank"><div class="link-image add-link"><i class="fa fa-paper-plane-o fa-4x" aria-hidden="true"></i></div><h4 class="link-heading">Contribute your knowledge</h4></a><p class="link-text"><p id="last-link">You have a good tip, website or blog you think would help Job Seekers? Let us know!</p>
                <a href="mailto:playbook@purplesquirrel.io" target="_blank"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Add your link!</a>
            </div>
        </div>
        <div class="4u 12u$(medium)">
            <section>
                <h2 class="link-text-header">Introduction</h2>
                <?php echo $page->text()->kirbytext() ?>
                <h2>Get Personal</h2>
                <div class="getpersonal-container"><?php echo $page->get_personal()->kirbytext() ?><img src="https://source.unsplash.com/category/buildings/300x600" alt=""></div>
                <div class="sharing">
                    <ul class="icons">
                        <li>Share this with your friends!</li>
                        <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @dawnofpurple')?>" target="blank" title="Tweet this"><i class="fa icon style2 fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook"><i class="fa icon style2 fa-facebook" aria-hidden="true"></i></a>
                    </ul>
                </div>
            </section>
        </div>
    </div>
<?php endif; ?>
