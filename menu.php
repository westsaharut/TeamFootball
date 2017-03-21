	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="background-color: #0dbb7b;">
			<div class="navbar-header" style="background-color: #0dbb7b;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span style="color: #720b57;"><b><i class="fa fa-rocket" aria-hidden="true"></i>F</b></span>ootball</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<?php
							if(isset($_SESSION["UseType"])){
						?>
								<a class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?= $_SESSION["UseFirstName"]?> (<?= $_SESSION["UseType"]?>)<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="query/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sing out</a></li>
								</ul>
						<?php
							}else {
						?>
								<a href="login.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login</a>
						<?php
							}
						?>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>  Home</a></li>
			<?php
				if(!empty($_SESSION["UseType"])){
					if($_SESSION["UseType"] == "admin"){
			?>
						<li><a href="addParking.php"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;&nbsp; Add Parking</a></li>
			<?php
					}else if($_SESSION["UseType"] == "user"){
			?>

			<?php
					}
				}
			?>
		</ul>
	</div><!--/.sidebar-->
