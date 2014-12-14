{{ HTML::script('packages/startbootstrap/js/jquery.js') }}
{{ HTML::style('packages/startbootstrap/css/landing-page.css') }}
<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="intro-message">
					<div class="input-group">
					    <div class="input-group-btn">
					        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">All <span class="caret"></span></button>
					        <ul class="dropdown-menu" role="menu">
					          	<li><a href="#">Category 1</a></li>
					          	<li><a href="#">Category 2</a></li>
					          	<li class="divider"></li>
					          	<li><a href="#">Random Search</a></li>
					        </ul>
					    </div><!-- /btn-group -->
					    <input type="text" class="form-control">
						    <span class="input-group-btn">
						    	<button class="btn btn-default" type="button">Go!</button>
						    </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>