<h1>päivitä valitun asiakkaan tiedot</h1>
<form action="paivita_asiakas" method="POST">
<TABLE BORDER=1>
<?php
echo '<tr><td>Etunimi</td><td><input type="text" name="en" value="'.$asiakas[0]['etunimi'].'"/></td></tr>';
echo '<tr><td>Sukunimi</td><td><input type="text" name="sn" value="'.$asiakas[0]['sukunimi'].'"/></td></tr>';
echo '<tr><td>email</td><td><input type="text" name="em" value="'.$asiakas[0]['email'].'"/></td></tr>';
echo '<input type="hidden" name="id" value="'.$asiakas[0]['id_asiakas'].'"';
?>
</TABLE>
<input type="submit" name="btnTallenna" value="Tallenna"/>
</form>