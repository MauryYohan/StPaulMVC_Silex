<?php
// Commit v2 - MVC
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
$sejours = $bdd->query('select * from sejour order by sejno');

foreach ($sejours as $sejour) {
    echo '<h2>';
	echo $sejour['SEJINTITULE'];
    echo '</h2>';
	echo $sejour['SEJMONTANTMBI'].'€';
    echo'<br />';
	echo 'A partir du '.$sejour['SEJDTEDEB'].' ';
	echo $sejour['SEJDUREE'].' nuits';
    echo'<br /> <br />';
}

?>