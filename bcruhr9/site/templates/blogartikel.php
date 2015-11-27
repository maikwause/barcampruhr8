<?php snippet('header') ?>

<section class="know-about-us">
	<div class="center clearfix">
		<div class="text">
  			<article>
    			<h1><?php echo $page->title()->html() ?></h1>
    				<?php echo $page->text()->kirbytext() ?>

    				<a href="<?php echo url('blog') ?>">Zurück zum Blog…</a>

  			</article>
  		</div>
  	</div>
</section>

<?php snippet('footer') ?>