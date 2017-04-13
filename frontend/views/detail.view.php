
<?php include('snippets/header.php'); ?>

<div class="container">

	<div class="row hotel-detail">
		<div class="col-md-12">
			<h1>Hotel Name</h1>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" style="width:100%;">
				</div>
				<div class="col-md-8">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div style="margin-top:30px;">
						<button class="btn btn-lg btn-primary btn-booking">
							Book Now 
						</button>					
					</div>

				</div>
				
			</div>
		</div>
	</div>

	<div class="row booked-success">
		<div class="col-md-12 text-center">
			<div class="alert alert-success">
				<h2><i class="glyphicon glyphicon-ok"></i> Room Booked!</h2>
			</div>
		</div>
	</div>

	<div class="row guides-overview" style="margin-bottom:30px;">
		<div class="col-md-12 text-center">
			<br>
			<h2>Your local guides are waiting for you..</h2>
			<br><br>
		</div>
		<div class="col-md-10 col-md-push-1">

			<?php for($i=0;$i<10;$i++): ?>
				
			
			<div class="row guide__profile">
				<div class="box-shadow">
					<div class="col-md-3">
						<div class="guide__profile-img" style="background:url(https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150) 50% 50% no-repeat #fff;">
							
						</div>
					</div>
					<div class="col-md-7">
						<h2>Guide name</h2>
						<p>
							Language: Some, Language<br>
							Response Time: Fast, i hope.
						</p>
						<p>
							<i class="glyphicon glyphicon-heart text--blue"></i>
							<i class="glyphicon glyphicon-heart text--blue"></i>
							<i class="glyphicon glyphicon-heart text--blue"></i>
							<i class="glyphicon glyphicon-heart text--blue"></i>
							<i class="glyphicon glyphicon-heart text--blue"></i> 
							<a href="#">(144 Reviews)</a>
							<br><br>
						</p>


						<div class="row">
							<div class="col-md-3">
								<img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100%C3%97100&w=100&h=100">
								Some Text
							</div>
							<div class="col-md-3">
								<img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100%C3%97100&w=100&h=100">
								Some Text
							</div>
							<div class="col-md-3">
								<img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100%C3%97100&w=100&h=100">
								Some Text
							</div>
							<div class="col-md-3">
								<img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100%C3%97100&w=100&h=100">
								Some Text
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<a class="btn btn-block btn-lg btn-primary btn-booking">
							Book Me
						</a>
					</div>
				</div>

			</div>

			<?php endfor; ?>
		</div>

	</div>
</div>