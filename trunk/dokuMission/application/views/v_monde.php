 <body>

 <?php echo $library_src;?>
<?php echo $script_foot;?>
<?php 
/*echo validation_errors();
echo form_open('Gmonde/add/');

foreach ($mondes as $monde){
	echo("<table border=1><tr><td>".$monde->getLibelle()."</td><td><a href='#' class='update' id='".$monde->getId()."'>Modif</a></td><td><a href='#' class='delete' id='".$monde->getId()."'>Suppr</a></td></tr></table>");	
}

?>

<br>


<?php
echo form_close();
?>
<?php 	echo form_open('Gmonde/update/'); ?>
	
	<div id="modifier" style="display:none;">
		Modifier: <input type='text' name='update_monde'><input type='submit' value='Insérer'>

	</div>
	<?php echo form_close();*/ 

foreach ($mondes as $monde){
	echo("<table border=1><tr><td>".$monde->getLibelle()."</td><td><a href='#' class='update' id='".$monde->getId()."'>Modif</a></td><td><a href='#' class='delete' id='".$monde->getId()."'>Suppr</a></td></tr></table>");
}

?>
	<form id="frmAddMonde" name="frmAddMonde">
		<label for="libelle">Ajouter:</label> <input type="text" name="libelle" id="libelle">
		<input type="button" value="Ajouter" id="btAdd">
	</form>
	
	<div id="modifier" style="display:none;">
		<form id="frmUpdateMonde" name="frmUpdateMonde">
			<label for="libelle">Modifier:</label> <input type="text" name="libelle" id="libelle">
			<input type="button" value="Modifier" id="btUpdate">
		</form>
	</div>
	
<div id="message">
</div>

</body>