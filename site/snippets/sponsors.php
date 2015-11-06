<section class="our-sponsors" id="sponsors">
	<div class="center">
    	<h2>UNSERE SPONSOREN</h2>
    	<p>Ein großes "Dankeschön" an unsere großartigen barcamp.ruhr 9 Sponsoren!</p>
    	<div class="row sponsors">

		<?php 
		$i = 1;
		foreach(page('sponsoren')->children()->visible() as $project): 
		e($i % 5 == 0, '</div><div class="row sponsor">') ?>
		<div class="col-sm-3 sponsor">
    		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    		<a href="<?php echo $project->link() ?>">
      			<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    		</a>
		</div>
		    <?php endif ?>
		<?php $i++; endforeach ?>
		</div>
	</div>
</section>

