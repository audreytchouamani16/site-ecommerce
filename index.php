<?php require_once('connexion.php'); /*appeller la page connexion.php*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="B.A_style.css"/>
</head>

<body>
<div id="entete">
  <a href="login.php" class="login">Login</a> 
  
	 <video autoplay="autoplay"  class="video_entete">
		<source src="video et photo/buy_and_sell_online_electronic_retail_e-commerce_wireless_online_shopping_h264_42025.mp4" type="video/mp4"/>
	 </video>
	
	<p class="nomsite">B.A corporation</p>
	
<div id="formateriel">
		
		<form name="formateriel" method="post" action="">
			<input id="motcle" type="text" name="motcle" placeholder="recherche par nom..." />
			<input class="btfind"  type="submit" name="btsubmit" value="recherche" />
			 <!-- input  permet creer une interaction dans le formulaire qui permet a l'utilisateur de saisir ses données -->
		</form>
</div>
</div>
<div id="articles">
	<?php
		if(isset($_POST['btsubmit'])) {
			$mc=$_POST['motcle'];/*$-post : les données envoyer par l'utilisateur peuvent encore etre modifiées*/
			$reqSelect="select * from materiels where nom_materiel like '%$mc%'";
		}
		else{
			$reqSelect="select * from materiels";
		}
		
		$resultat=mysqli_query($cnbacorporation, $reqSelect);
		$nbr=mysqli_num_rows($resultat);
		echo "<p><b>".$nbr."</b> Resutats de votre recherche...</p>";
		while($ligne = mysqli_fetch_assoc($resultat)){

		}
		
	
	{	
	?>
        <div id="materiels">
			<img src="<?php echo $ligne['image'] ?>" /> <br />
			<?php echo $ligne['nom_materiel']?><br /> 
			<?php echo $ligne['prix']?><br />
        </div>
			 
		
		
	<?php  	} ?>	
</div>
	
	
	
	
	
</body>
</html>