<?php require_once("header.inc.php"); ?>




<div class="row" id="content">
    			<div class="col-md-9" id="content_text">
					<h1>Contactez moi</h1>

					<div class="alert alert-success" id="notif"></div>


					 <form class="form-horizontal" action="article_action.php" method="post">
					  <div class="form-group has-feedback">
					    <label class="control-label col-sm-2" for="email" >titre *:</label>
					    <div class="col-sm-10"><input type="number" class="form-control" id="titre" name="titre" required="required"> 
					    <span class="glyphicon glyphicon-warning-sign form-control-feedback">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="sujet">texte *:</label>
					    <div class="col-sm-10">
					    <textarea class="form-control" required="required" id="texte" name="texte" ></textarea>
					     </div>
					  </div>

					  

					  

					  <input type="submit" value="Envoyer" class="btn btn-default">
					</form>
	    		</div>
    			<div class="col-md-3 " id="sidebar">
					Sidebar Lorem ipsum, quis nostrud exercitation ullamco
	                laboris nisi ut aliquip ex ea commodo consequat
    			</div>
    		</div>



<?php require_once("footer.inc.php"); ?>
<script src="js/bloggy.js"></script>
