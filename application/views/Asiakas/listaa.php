<h1>Asiakkaat</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>email</TH></TR>
<?php 
foreach ($asiakkaat as $rivi) {
 	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['email'].'</td></tr>';
 } 
?>
</TABLE>

