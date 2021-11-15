<div class="logo-container">
	<a href="../admin/" class="logo">
		<img src="../images/logo.jpeg" class="logo-image" width="100" height="44" alt="ASO Admin" />
		<img src="../images/logo.jpeg" class="logo-image-mobile" width="100" height="44" alt="ASO Admin" /> 
	</a>
	<button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
		<i class="fas fa-bars"></i>
	</button>
	<div class="header-nav collapse">
		<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
			<nav>
				<ul class="nav nav-pills" id="mainNav">
					<li class="">
						<a class="nav-link" href="dashboard.php"> Dashboard</a>
					</li>
					<li>
						<a class="nav-link" href="../"> Front-End <span class="tip tip-dark">hot</span><em class="not-included"></em></a>
					</li>
					<li>
						<a class="nav-link" href="activity_log.php">Activity Log</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="header-right">
	<a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search">
		<i class="bx bx-search"></i>
	</a>
	<form action="search.php" class="search search-style-1 nav-form d-none d-xl-inline-block">
		<div class="input-group">
			<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
			<span class="input-group-append">
				<button class="btn btn-default" type="submit">
					<i class="bx bx-search"></i>
				</button>
			</span>
		</div>
	</form>
	<span class="separator"></span> 
	<a class="dropdown-language nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
		<img src="img/blank.gif" class="flag flag-us" alt="English" /> EN 
		<i class="fas fa-chevron-down"></i> 
	</a> 
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage"> 
		<a class="dropdown-item" href="#">
			<img src="img/blank.gif" class="flag flag-us" alt="English" /> English
		</a> 
		<a class="dropdown-item" href="#">
			<img src="img/blank.gif" class="flag flag-es" alt="English" /> Español
		</a> 
		<a class="dropdown-item" href="#">
			<img src="img/blank.gif" class="flag flag-fr" alt="English" /> Française
		</a> 
	</div>
	<span class="separator"></span>
		<ul class="notifications">
			<li>
				<?php
					$tasks = 3;
					if ($tasks > 0) { 
						?>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="bx bx-task"></i>
					<span class="badge"><?php echo @$tasks ?></span>
				</a>
				<div class="dropdown-menu notification-menu large">
					<div class="notification-title">
						<span class="float-right badge badge-default"><?php echo @$tasks ?></span> Tasks
					</div>
					<div class="content">
						<ul>
							<?php
							$task =1;
						while ($task <= $tasks) {
						 ?>
							<li>
								<p class="clearfix mb-1">
									<span class="message float-left">Generating Sales Report</span>
									<span class="message float-right text-dark">60%</span>
								</p>
								<div class="progress progress-xs dark">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
										
									</div>
								</div>
							</li>
							<li>
								<p class="clearfix mb-1">
									<span class="message float-left">Importing Contacts</span>
									<span class="message float-right text-dark">98%</span>
								</p>
								<div class="progress progress-xs light">
									<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
										
									</div>
								</div>
							</li>
							<?php 
							$task++;
						} ?>
						</ul>
						<hr>
						<div class="text-right">
							<a href="#" class="view-more"><center>View All</center></a>
						</div>
					</div>
				</div>
				<?php 
				
				}
				 ?>
				</li>
			<li>
				<?php
					@$messages = 5;
					if ($messages > 0) { 
						?>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="bx bx-envelope"></i>
					<span class="badge"><?php echo @$messages ?></span>
				</a>
				<div class="dropdown-menu notification-menu">
					<div class="notification-title">
						<span class="float-right badge badge-default"><?php echo @$messages ?></span> Messages
					</div>
					<div class="content">
						<ul>
							<?php
							@$message =1;
						while ($message <= $messages) {
						 ?>
							<li>
								<a href="#" class="clearfix">
									<span class="image image-as-text bg-secondary"><?php @$image."andmn admnmas akjkekwkj" ?></span>
									<span class="title"><?php echo @$name."andmn admnmas akjkekwkj" ?></span>
									<span class="message "><?php @$msg."andmn admnmas akjkekwkj" ?></span>
								</a>
							</li>
						<?php 
						$message++;
					}?>
						
						</ul>
						<hr />
						<div class="text-right">
							<a href="#" class="view-more"><center>View All</center></a>
						</div>
					</div>
				</div>
			<?php } ?>
			</li>
			<li>
			<?php
				@$alerts = 5;
				if ($alerts > 0) { 
					?>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
				<i class="bx bx-bell"></i>
				<span class="badge"><?php echo $alerts ?></span>
				</a>
				<div class="dropdown-menu notification-menu">
				<div class="notification-title">
				<span class="float-right badge badge-default"><?php echo @$alerts ?></span>
				Alerts
				</div>
				<div class="content">
				<ul>
				<?php
					@$alert =1;
					while($alert <= $alerts) {
					 ?>
					<li>
						<a href="#" class="clearfix">
							<div class="image">
								<i class="bx bx-lock-alt bg-success"></i>
							</div>
							<span class="title">User Locked</span>
							<span class="message">15 minutes ago</span>
						</a>
					</li>
				<?php  
					$alert ++;
					} 
					?>
				</ul>
				<hr />
				<div class="text-right">
				<a href="#" class="view-more"><center>View All</center></a>
				</div>
				</div>
				</div>
				<?php } ?>
			</li>
		</ul>
		<span class="separator"></span>
		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<span class="profile-picture profile-picture-as-text"><?php echo @$_SESSION['user'] ?></span> 
				<div class="profile-info profile-info-no-role" data-lock-name="John Doe" data-lock-email="<?php echo @$_SESSION['email'] ?>"> 
					<span class="name">Hi, <strong class="font-weight-semibold"><?php echo @$_SESSION['username'] ?></strong>
					</span> 
				</div>
				<i class="fas fa-chevron-down text-color-dark"></i>
			</a>
			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li>
						<a role="menuitem" tabindex="-1" href="profile.php">
							<i class="bx bx-user"></i> My Profile
						</a>
					</li>
					<li>
						<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock-open-alt"></i> Lock Screen
						</a>
					</li>
					<li>
						<a role="menuitem" tabindex="-1" href="logout.php">
							<i class="bx bx-log-out"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
