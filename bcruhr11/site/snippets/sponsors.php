<section class="our-sponsors" id="sponsors">
	<div class="center">
    	<h2>UNSERE SPONSOREN</h2>
    	<p>Ein großes "Dankeschön" an unsere großartigen barcamp.ruhr 11 Sponsoren!</p>
		<div class="row sponsors">
		<?php
		//Alle Sponsoren mit Gold-Status ausfiltern

		foreach(page('sponsoren')->children()->visible()->filterBy('Goldsponsor', 'gold') as $goldsponsor):?>
			<div class="col-sm-4 sponsor">
	    		<?php if($image = $goldsponsor->images()->sortBy('sort', 'asc')->first()): ?>
	    		<a href="<?php echo $goldsponsor->link() ?>">
      				<img src="<?php echo $image->url() ?>" alt="<?php echo $goldsponsor->title()->html() ?>" >
    			</a>
    			<?php endif ?>
			</div>
		<?php endforeach;?>
		<!--
			<div class="col-sm-4 sponsor become-sponsor">
                <a href="mailto:mail@barcamp.ruhr?subject=Premium-Sponsoring"><span>WERDE PREMIUM-SPONSOR</span></a>
            </div>    
		-->

		</div>
    	<div class="row sponsors">
		<?php 
		$i = 0;
		foreach(page('sponsoren')->children()->visible()->filterBy('Goldsponsor','!=','gold') as $project): 
		//vor dem 5. Element Reihenwechsel einbauen
		e($i % 4 == 0, '</div><div class="row sponsors">') ?>
		<div class="col-sm-3 sponsor">
    		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    		<a href="<?php echo $project->link() ?>">
      			<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    		</a>
		</div>
		    <?php endif ?>
		<?php $i++; endforeach ?>
			<!--
			<div class="col-sm-3 sponsor become-sponsor">
                <a href="mailto:mail@barcamp.ruhr?subject=Basis-Sponsoring"><span>WERDE BASIS-SPONSOR</span></a>
            </div>    
			-->
	     <?php $i=$i+1;?>       
		</div>
	</div>
</section>

