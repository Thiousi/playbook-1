<h2>Subpages</h2>
<ul>
  <?php foreach($page->children() as $subpage): ?>
  <li>
    <a href="<?php echo $subpage->url() ?>">
      <?php echo html($subpage->title()) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>
