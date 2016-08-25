<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="<?php echo $site->url() ?>">Home</a></li>

        <?php foreach ($pages->visible() as $p): ?>
            <li><p class="list">+</p><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a><ul>
            <?php foreach ($p->children() as $subp): ?>
                <li class="subnav"><a href="<?php echo $subp->url() ?>"><?php echo $subp->title()->html() ?></a></li>
            <?php endforeach; ?>
        </ul></li>
        <?php endforeach; ?>

        <li><a href="/search">Search</a></li>
    </ul>
</nav>
