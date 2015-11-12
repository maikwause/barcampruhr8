<?php snippet('header') ?>

<section class="know-about-us">
	<div class="center clearfix">
		<div class="text">

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>
  <table>
  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <tr>
  	<td><h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></h1></a></td><td><?php echo $article->date() ?></td>
  </tr>	
  <tr>
  	<td><p><?php echo $article->text()->excerpt(300) ?></p></td><td><a href="<?php echo $article->url() ?>">weiterlesen…</a><td>
  </tr>	
  <?php endforeach ?>
  </table>
</div>
</div>
</section>
<?php snippet('footer') ?>