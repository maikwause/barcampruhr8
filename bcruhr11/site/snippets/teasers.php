<section class="know-about-us">
	<div class="center">
    	<h1>So war das barcamp.ruhr 11:</h1>
		<div class="row">
		<?php
		foreach(page('teaser')->children()->visible() as $tea):?>
			<div class="col-sm-4 teaser">
				<h2><?php echo $tea->title();?></h2>
				<p><?php echo $tea->text()->kirbytext();?></p>
				<?php if(strlen($tea->link())>0): ?>
					<p><a href="<?php echo $tea->link()->uri();?>"><?php echo $tea->linktitle();?></a></p>
				<?php endif; ?>

			</div>
		<?php endforeach;?>
		</div>
	</div>
</section>

