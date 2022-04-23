<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="B.A_style.css"/>
</head>
<body>

<div id="formlogin">
    <form  name= formulaire action="" method="post" >
        <h1>Connexion</h1>
        <label><b>user name :</b></label></br>
        <input type="text" placeholder="Entrer le nom de l'utilisateur" name="txtlogin" required class="Zonetext"></br>
         <!-- required: pour l'utilisateur entre une valeur specifique--->
        
        <label><b>password :</b></label></br>
        <input type="password" placeholder="Entrer le mot de pass" name="txtpw" required class="Zonetext"></br>
        
        <input type="submit" name="btlogin"value="LOGIN" id="submit" class="submit"></br>
    
    <?php
    if (isset($_POST['btlogin'])) {
        $req="select * from utilisateurs where login='".$_POST['txtlogin']."' and password='".$_POST['txtpw']."'";
        if($resultat=mysqli_query($cnbacorporation,$req))
        { 
            $ligne=mysqli_fetch_assoc($resultat);/*executer la requette sous forme de tableau associatif*/
            if($ligne!=0){
                session_start();/* pour redemarrer une autre session( authentification) : le serveur verifie si la session qui a le meme identifiant envoyé existe*/ 
                $_SESSION['mon login']=$_POST['txtlogin'];
                header("B.A_corporation:Direction.php");/*permet de nous rediriger vers la page direction*/ 
            }
            else{
                echo "<font color='#F0001D'>Login ou mot de pass invalide</font>";/*font color pour mettre la color du texte ecris dans echo */
            }
        } 
    }
    /*si l'utilateur saisie le mot de pass et le login et clique sur le boutton login alors , si le mot de pass et l login sont correcte il ouvre la page direction  apres authentification si non il dit mot de pass invalide*/
    
    
    ?>
    
    </form>

</div>