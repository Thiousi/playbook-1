<div class="row">
    <div class="12u 12u$(medium)">
        <section style="margin-top: 20px">
            <?php if($prev = $page->prevVisible()): ?>
                <a href="<?php echo $prev->url() ?>"><div class="article-nav" style="float:left;"><p><i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back to <?php echo $page->prev()->title() ?></p></div></a>
            <?php endif ?>
            <?php if($next = $page->nextVisible()): ?>
                <a href="<?php echo $next->url() ?>"><div class="article-nav" style="float:right;"><p>Go to <?php echo $page->next()->title() ?>  <i class="fa fa-hand-o-right" aria-hidden="true"></i></p></div></a>
            <?php endif ?>
            <?php if(!($next = $page->nextVisible())): ?>
                <a href="https://standout.typeform.com/to/COXBzh"><div class="article-nav" style="float:right;"><p>Finish!  <i class="fa fa-hand-o-right" aria-hidden="true"></i></p></div></a>
            <?php endif ?>
        </section>
    </div>
</div>
