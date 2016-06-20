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
			<a href="index.php?p=admin&l=add_cat">
				<span>
					<img src="./webroot/img/icone/add.png"/>
					<br />
					Ajouter une categorie
				</span>
			</a>
				<a href="index.php?p=admin&l=modifier">
			<span>
				<img src="./webroot/img/icone/add.png"/>
				<br />
				Modifer un article
			</span>
			</a>
				<a href="index.php?p=admin&l=sup_i">
			<span>
				<img src="./webroot/img/icone/del.png"/>
				<br />
				Supprimer un article
			</span>
			</a>
			<a href="index.php?p=admin&l=mod_c">
			<span>
				<img src="./webroot/img/icone/add.png"/>
				<br />
				Modifer une categorie
			</span>
			</a>
				<a href="index.php?p=admin&l=del_c">
			<span>
				<img src="./webroot/img/icone/del.png"/>
				<br />
				Supprimer une categorie
			</span>
			</a>
				<a href="index.php?p=admin&l=add_use">
			<span>
				<img src="./webroot/img/icone/use.png"/>
				<br />
				Ajouter un utilisateur
			</span>
				</a>
				<a href="index.php?p=admin&l=del_u">
			<span>
				<img src="./webroot/img/icone/del.png"/>
				<br />
				Supprimer un utilisateur
			</span>
			</a>
		</a>
			<a href="index.php?p=admin&l=commande">
				<span>
					<img src="./webroot/img/icone/add.png"/>
					<br />
					Voire les commandes.
				</span>
			</a>
		</div>
	<hr style="clear:both;display:block;"/>
	</div>
	<?php
}
else
{
?>
<form class="form-container" method="post" action="index.php?p=admin">
	<div class="form-title">
		<h2>Se connecter au backOffice</h2>
	</div>
	<div class="form-title">Nom</div>
		<input class="form-field" type="text" name="nom" placeholder="Entrez votre nom" /><br />
			<span class="erreur"> <?php if($exist == 1){?>* Pseudo deja existant  <?php } if ($pseudo == 1){ ?> *Vous devez renseigner un nom <?php } ?></span>
	<div class="form-title">Password</div>
		<input class="form-field" type="password" name="pass" placeholder="Entrez votre passe" /><br />
			<span class="erreur"> <?php if($exist == 3){?>* Mail deja existant<?php } if ($pass == 1){ ?> *Vous devez renseigner un mot de passe <?php }?></span>
	<div class="submit-container">
		<input class="submit-button" type="submit" value="Envoyer" />
	</div>
</form>
<?php
}
?>