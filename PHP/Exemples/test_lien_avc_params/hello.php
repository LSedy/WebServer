<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>

<p>Bonjour <?php echo $_GET['prenom']; ?> !</p>
<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>    

<?php echo 'Hello, ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '. You\'re welcome here.'; ?>


<!-- Tester la présence d'un paramètre -->
<?php
echo '<br /><br />';
if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
{
	echo 'hello, new biped ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'you must define a name and a lastname!';
}
/*
!!!!!! il faut que vous pensiez à gérer le cas où des paramètres que vous attendiez viendraient à manquer.!!!!!!
*/
?>
<!-- Controler la valeur des paramètres || hello.php?nom=Dupont&prenom=Jean&repeter=8 -->
<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
	{
		echo 'hello ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
	}
}
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
}
?>

</body>
</html>