<?php snippet('header') ?>
<header class="intro">
  <h1>Get to know me</h1>
</header>
<div class="col-12 col-lg-6">
      <img src="<?= $page->image()->url(); ?>" class="img-fluid" alt="<?= $page->image()->title(); ?>" />
    </div>
<div class="row">
  <div class="col-12 col-lg-9">
    <?= $page->text()->blocks()->html() ?>
  </div>
  <div class="col-12 col-lg-3">
    <h2>Resume</h2>
    <a href="<?= $page->files()->template('document') ?>" target="_blank">Download resumé</a>
  </div>
</div>

<?php snippet('footer') ?>