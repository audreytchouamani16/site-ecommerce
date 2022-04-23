<?php
function ajouter($image,$nom, $prix, $desc)
{
	if(require("connexion.php"))
	{
		$req = $access->prepare("INSERT INTO materiels (image, nom, prix, description) VALUES ($image, $nom, $prix, $desc)");
		$req->execute(array($image, $nom, $prix, $desc));
		$req->closecursor();
	}
}
function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM materiels ORDER BY id DESC");
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_OBJ);
		return $data;
		$req->closecursor();
	}
}
function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE * FROM materiels WHERE id=?");
		$req->execute(array($id));
	}
}
?>