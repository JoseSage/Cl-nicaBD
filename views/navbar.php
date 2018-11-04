<div class="navbar navbar-custom" rol="navigation">
		<div class="navbar-collapse collapse">
			<div class="container">
				<?php if(isset($_SESSION['username'])) { ?>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="data-toggle">
							<i class="glyphicon glyphicon-user"></i>
							
								Bienvenido: <?= $_SESSION['username'];?>
							
							</a>
					</li>
					<li><a href="index.php?controller=logout"><b class="glyphicon glyphicon-log-out"></b>Salir</a></li>
				</ul>
				<?php } ?>
			</div>
		</div>
</div>


