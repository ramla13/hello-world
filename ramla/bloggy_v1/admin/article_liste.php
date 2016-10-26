<?php require_once("header.inc.php") ;
 include("../classes/Article.php");

 $c=new Article();
                 $liste=$c->liste();
?>



<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
								

					<h2 class="page-title">Articles</h2> 
					<div>
								<a href="ajout.php" 
								onclick="return confirm('voulez vous ajouter un nouvel article ?')"
									 class="btn btn-default">Ajouter un article</a>
								</div> <br> <br>

					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>titre</th>
								
								<th>Date</th>

								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
<?php
                 
                 foreach ($liste as $item ) { ?>
							<tr>
							<td><?php echo $item->_id	;?> </td>
							
							<td><a href="description_article.php?id=<?php echo $item->_titre	;?>"> <?php echo $item->_titre	;?></a> </td>
							
							<td><?php echo $item->_d_ajout	;?> </td>

								<td>
								<a href="article_supp.php?id=<?php echo $item->_id	;?>" 
								onclick="return confirm('supprimer?')"
									 class="btn btn-danger btn-xs">Suprimer</a>
									 <a href="article_modif.php?id=<?php echo $item->_id;?>" 
								onclick="return confirm('modifier?')"
									 class="btn btn-success btn-xs">Modifier</a>
								</td>
							</tr>
							<!-- ** Fin de la boucle ** -->
<?php } ?>
							<!-- ** Supprimer les 2 lignes (TR) ci-dessous ** -->
							
						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

<script src="js/bloggy.js"></script>

		<?php require_once("footer.inc.php"); ?>
