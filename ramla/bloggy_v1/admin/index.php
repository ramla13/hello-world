<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2> 
					<?php 
					require_once('../classes/Mysql.php');
						$sql=new Mysql(); 
						?>
					<div class="alert alert-success">
						Nombre d'articles :<?php echo $sql->nbr_Articles(); ?> 
					</div>

					<div class="alert alert-success">
						Nombre de commentaires :<?php echo $sql->nbr_Contact(); ?> 
					</div>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>