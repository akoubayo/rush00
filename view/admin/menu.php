<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] === 1)
{
	?>
	<div id="content">
		<div id="div-icone">
			<a href="index.php?p=admin&l=add">
				<span>
					<img src="./webroot/img/icone/add.png"/>
					<br />
					Ajouter un article
				</span>
			</a>
				<a href="index.php?p=admin&l=modifier">
			<span>
				<img src="./webroot/img/icone/add.png"/>
				<br />
				Modifer un article
			</span>
			</a>
				<a href="index.php?p=admin&l=gestion">
			<span>
				<img src="./webroot/img/icone/del.png"/>
				<br />
				Supprimer un article
			</span>
			</a>
				<a href="index.php?p=admin&l=gestion">
			<span>
				<img src="./webroot/img/icone/use.png"/>
				<br />
				Ajouter un utilisateur
			</span>
				</a>
				<a href="index.php?p=admin&l=gestion">
			<span>
				<img src="./webroot/img/icone/del.png"/>
				<br />
				Supprimer un utilisateur
			</span>
			</a>
		
		</div>
	<?php
}
	?>