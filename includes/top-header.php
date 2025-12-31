<?php 
	//session_start();
	
?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					
					<?php if(strlen($_SESSION['login']))
						{   ?>
						<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
					<?php } ?>
					
					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<?php if(strlen($_SESSION['login'])==0)
						{   ?>
						<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
						<?php }
						else{ ?>
						
						<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
						
					<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->
			
			<?php if(strlen($_SESSION['login'])!=0)
				{   ?>
				<div class="cnt-block">
					<ul class="list-unstyled list-inline">
						<li class="dropdown dropdown-small">
							<a href="order-history.php" class="dropdown-toggle" ><span class="key">Order History</b></a>
							
						</li>
						<li class="dropdown dropdown-small">
							<a href="pending-orders.php" class="dropdown-toggle" ><span class="key">Pending Payment</b></a>
							
						</li>
						
					</ul>
				</div>
			<?php } ?>	
			
			<?php if(strlen($_SESSION['login'])==0)
				{   ?>
			<div class="cnt-block">
					<ul class="list-unstyled list-inline">
						<li class="dropdown dropdown-small">
							<a href="admin/index.php" class="dropdown-toggle" ><span class="key">Admin</b></a>
							
						</li>
						
						
					</ul>
				</div>
				<?php } ?>	
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->