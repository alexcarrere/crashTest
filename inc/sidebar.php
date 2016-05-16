<div id="sidebar">

	<div id="avatar">
		<img src="<?php echo SERVERPATH; ?>/img/avatar250x250.png" class="img-circle img-responsive img-thumbnail" alt="avatar">
		<p>Nom Prénom</p>
	</div>

	<div id="profil" class="text-center">
		<p>00 11 22 33 44</p>
		<p>42 Rue de l'empire</p>
		<p>42424</p>
		<p>Base de la Resistance</p>
	</div>


	<div class="menu">
		<ul class="nav nav-pills nav-stacked">

			<?php 
				if (isset($pageSite) && $pageSite == 'index') :
			?>
				<li id="active">
			<?php 
				else :
			?>
				<li>
			<?php 
				endif;
			?>
				<a href="<?php echo SERVERPATH.'/index.php';?>">Acceuil</a>
			</li>



			<?php 
				if (isset($pageSite) && $pageSite == 'list_news') :
			?>
				<li id="active">
			<?php 
				else :
			?>
				<li>
			<?php 
				endif;
			?>
				<a href="#">Liste des news</a>
			</li>

			<?php 
				if (isset($pageSite) && $pageSite == 'search_news') :
			?>
				<li id="active">
			<?php 
				else :
			?>
				<li>
			<?php 
				endif;
			?>
				<a href="#">rechercher une news</a>
			</li>

			<?php 
				if (isset($pageSite) && $pageSite == 'contact') :
			?>
				<li id="active">
			<?php 
				else :
			?>
				<li>
			<?php 
				endif;
			?>
				<a href="<?php echo SERVERPATH.'/contact.php';?>">Contact</a>
			</li>
			
		</ul>
	</div>

	<div id="menu_admin" class="menu">

		<p>Menu d'administration</p>

		<ul class="nav nav-pills nav-stacked">
			<li><a href="#">Ajouter une news</a></li>
			<li><a href="#">Modifier une news</a></li>
			<li><a href="#">Modifier les utilisateurs</a></li>
		</ul>
	</div>

</div>