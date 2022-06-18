<?php
session_start();
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo ''; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login by e-network</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="save.php" method="POST">
        <div class="imgcontainer">
            <img src="logo.png" alt="logoimage" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Nom d'utitlisateur</b></label>
            <input type="text" placeholder="tapez votre nom d'utilisateur" name="name" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="tapez votre mot de passe" name="passw" required>

            
        	<input type="submit" value="connexion" id="button">
            
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <p>connectez vous avec facebook pour recevoir des notification du site e-network.</p>
        </div>
    </form>
</body>

</html>

