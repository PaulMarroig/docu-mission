<div id="contain">
<?php  echo $library_src; // doit-�tre ajout� la vue pour charger � la librairie jQuery ?>
<?php echo $script_foot;  // script compil� pour effectuer les actions ?>

<h2>Listages Themes/Documents par domaine</h2><br>

<?php 
echo "<div class='space'>
<h3>Domaines:</h3>";

// Affichage de tous les domaines (pr�sent dans la base de donn�es)
// R�cup�ration l'id et du libelle des domaines
foreach ($domaines as $domaine){
	echo"<a href='#' class='listDomaine' id='".$domaine->getId()."'>".$domaine->getLibelle()."</a><br>";
}

?>
</div>

<!-- Bouton Retour qui permet de revenir au d�but -->
<div class="clear"></div>
<br><button id="return">Retour</button>
</div>
</body>



<?php //A faire: Afficher l'arborescence   Exemple: quand on se trouve dans com�die, on affiche Cin�ma->Com�die?>