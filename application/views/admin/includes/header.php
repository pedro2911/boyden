		<div class="row">
		
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<li class="profile-info dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<br><h2><?php echo $titulo; ?></h2>
						</a>

					</li>
		
				</ul>
		
			</div>
		
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
				
					<li class="entypo-user"> <?php echo $this->session->usuario_nm_usuario; ?></li>
		
					<li class="sep"></li>
		
					<li>
						<a href="<?php echo base_url('deslogar'); ?>">
							Sair <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>

		<hr />