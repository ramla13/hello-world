<?php require_once("header.inc.php"); 

    		 require_once("./classes/Article.php");

 $c=new Article();
                 $liste=$c->liste();
?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title"> Articles </h2> 
					

					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">id</th>
								<th>titre</th>
								<
								<th>Date</th>

								
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
<?php
                 
                 foreach ($liste as $item ) { ?>
							<tr>
							<td><?php echo $item->_id	;?> </td>
							
							<td><?php echo $item->_titre	;?> </td>
							
							
							<td><?php echo $item->_d_ajout	;?> </td>

								
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

<?php require_once("footer.inc.php"); ?>