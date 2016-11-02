<h1>Valitun asiakkaan tilaukset</h1>
<form method="POST" action="etsi_tilaus">
<select name="valittu_id">

<?php 
	foreach ($asiakkaat as $rivi) {
			echo '<option value="'.$rivi['id_asiakas'].'">'.
			$rivi['etunimi'].''.
			$rivi['sukunimi'].'</option>';

	}



?>

</select>
<input type="submit" name="btnEtsi" value="Etsi"/>
</form>
<br>
<?php 
if(isset($tilaus)) {
	print_r($tilaus);
}

?>