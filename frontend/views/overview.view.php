
<?php include('snippets/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h3>Filters</h3>
			gagaga
		</div>
		<div class="col-md-9 search__results">
			<div class="row">
				<div class="col-md-12 hidden">
					<h2>Which one you like?</h2>
					blablabl
					blblalb
				</div>
			</div>

			<div class="row">
				<?php 
					for ($i=0; $i < 5; $i++):
				?>
					<div class="search__result">
						<div class="col-md-3">
							<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150">
						</div>
						<div class="col-md-9">
							<h2>Hotel title</h2>
							<p>
								hotel text
							</p>
							<div class="text-right">
								<button class="btn btn-primary btn-booking">Book Me</button>
							</div>
							
						</div>
					</div>
				<?php 
					endfor;
				?>
							
			
			</div>
			
		</div>

	</div>
</div>