<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LearnToCode</title>
	<link rel="stylesheet" href="CSS/test.css">
</head>
<body>

	<h1>LearnToCode</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem modi quod dolorem molestiae fugiat, mollitia aliquid cumque aliquam earum quasi nostrum iste labore blanditiis consectetur odio ea quis reprehenderit, eius ex praesentium incidunt. Harum dolorum sequi sapiente esse recusandae beatae perspiciatis fugit magnam numquam repellendus, eveniet voluptas nisi placeat architecto maiores a nam, exercitationem ratione ipsam minima. Aspernatur quisquam, ipsum quod facilis consequatur consequuntur eius placeat soluta eum in, autem ullam ex iure. Dolores facilis rem, nisi praesentium veniam nemo. Sed officia, labore itaque praesentium? Mollitia unde alias, similique consequatur. Ipsum eveniet excepturi laboriosam vel tempora omnis! Deleniti, itaque consectetur cum enim ex corrupti non accusantium eos aspernatur sapiente libero laudantium tempora! Laudantium consequatur deleniti, ipsa ut, nam aliquid officia architecto suscipit incidunt sint iure consequuntur, optio repellendus expedita doloribus veritatis amet facilis eveniet facere quos excepturi porro magni. Vero adipisci, ea enim excepturi, expedita laborum necessitatibus earum quae dolorum deleniti? Magnam mollitia voluptatibus nesciunt, veritatis quidem et voluptatem illum tempore maxime accusantium, quod consectetur sequi a veniam. Aliquid impedit, fuga odio esse, facilis saepe ratione modi id architecto alias mollitia. Nulla doloribus quam, tenetur unde qui consectetur iusto praesentium temporibus nemo, autem ullam voluptates molestiae ea repudiandae doloremque laudantium?</p>


	<?php

		//*********Rendre les champs requis**********//

		// $nom = $prenom = $DateNaissance = '';

		// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// 	if(empty($_POST['nom'])){
		// 		$nom = '<span class="erreur">Le nom est requis !!</span>';
		// 	}
		// 	if(empty($_POST['prenom'])){
		// 		$prenom = '<span class="erreur">Le prenom est requis !!</span>';
		// 	}
		// 	if(empty($_POST['DateNaissance'])){
		// 		$DateNaissance = '<span class="erreur">Le DateNaissance est requis !!</span>';
		// 	}
		// }
	?>
	

	<!-- <form method="POST">
		<label for="nom" class="label-class">
			Donnez votre nom:
			<input type="text" name="nom" id="nom">
		</label>
		<?php //echo $nom; ?>
		<br><br>
		<label for="prenom" class="label-class">
			Donnez votre prenom:
			<input type="text" name="prenom" id="prenom">
		</label>
		<?php //echo $prenom; ?>
		<br><br>
		
		<label for="filiere" class="label-class">
			Choisissez votre filiere:
			<select name="filiere" id="filiere">
				<option value="Génie électrique">Génie électrique</option>
				<option value="Génie informatique">Génie informatique</option>
				<option value="Génie industriel">Génie industriel</option>
				<option value="Génie mécanique">Génie mécanique</option>
			</select>
		</label><br><br>

		<span class="label-class">Quel est votre sexe ?</span>
		<label for="Homme">
			<input type="radio" name="sexe" value="Homme" id="Homme" checked>
			Homme
		</label>

		<label for="Femme">
			<input type="radio" name="sexe" value="Femme" id="Femme">
			Femme
		</label><br><br>

		<label for="DateNaissance" class="label-class">
			Donnez votre date de naissance:
			<input type="date" name="DateNaissance" id="DateNaissance">
		</label>
		 <?php //echo $DateNaissance; ?>
		<br><br>

		<input type="submit" value="S'inscrire">
	</form> -->

	<!-- <table>
		<tr>
			<td class="titre">Marque</td>
			<td class="titre">Matricule</td>
			<td class="titre">Couleur</td>
			<td class="titre">ID</td>
		</tr>
		<tr>
			<td>BMW</td>
			<td>SD1547</td>
			<td>blanche</td>
			<td><a href="dashboard.php?id=01">01</a></td>
		</tr>
		<tr>
			<td>Audi</td>
			<td>WS8574</td>
			<td>noir</td>
			<td><a href="dashboard.php?id=02">02</a></td>
		</tr>
		<tr>
			<td>Mercedes</td>
			<td>QW4561</td>
			<td>bleu</td>
			<td><a href="dashboard.php?id=03">03</a></td>
		</tr>
	</table>
 -->
	
	<!-- Les expressions régulières ou expressions rationnelles  -->


	<?php   

		// $nomMess = $emailMess = $numTelMess =  $URLMess = '';

		// if($_SERVER['REQUEST_METHOD']  == 'POST'){

		// 	$nom = htmlspecialchars($_POST['nom']);
		// 	$email = htmlspecialchars($_POST['email']);
		// 	$numTel = htmlspecialchars($_POST['numTel']);
		// 	$URL = htmlspecialchars($_POST['URL']);



		// 	if(!preg_match("#^[a-zA-Z]+$#", $nom)){
		// 		$nomMess = 'Format de nom invalide !!';
		// 	}

		// 	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		// 		$emailMess = 'Format d\'email invalide !!';
		// 	}

		// 	if(!preg_match("#^0[67][0-9]{8}$#", $numTel)){
		// 		$numTelMess = 'Format de numTel invalide !!';
		// 	}



		// 	if(!filter_var($URL,FILTER_VALIDATE_URL)){
		// 		$URLMess = 'Format d\'URL invalide !!';
		// 	}


		// }

	?>
	

<!-- 	<form method="POST">

		<h1>Page d'inscription:</h1>
		
		<input type="text" name="nom" placeholder="Entrez votre nom">
		<?php //echo $nomMess;  ?>
		<br><br>

		<input type="text" name="email" placeholder="Entrez votre email">
		<?php //echo $emailMess;  ?>
		<br><br>

		<input type="text" name="numTel" placeholder="Numero de telephone">
		<?php //echo $numTelMess;  ?>
		<br><br>

		<input type="text" name="URL" placeholder="URL">
		<?php //echo $URLMess;  ?>
		<br><br>

		<input type="submit" value="Sign Up">

	</form> -->

	<!-- ***************Les dates*************** -->

	<?php  

		// echo date('l  D/M/Y  h:i:s a');

		// $date1 = date_create('2020-11-05');
		// $date2 = date_create('2021-12-08');


		// $difference = date_diff($date1,$date2);


		// echo '<br>La difference entre ces deux dates est : ' . $difference->Format('%a %d %m %y jours');

	?>

	<!-- **************include et require************** -->
	
	<?php
		
		// include 'folkdsjlfkjasoter.php';

		// echo "Hello world !!";

		// require 'folkdsjlfkjasoter.php';

		// echo "Hello world"; 

		// include 'footer';


	?>

	<!-- **************Les exceptions************** -->

	<?php

		$nb1 = 5;
		$nb2 = 2;

		try{
			if($nb2 == 0)
				throw new Exception("Erreur: Divizion par zero !!");
			else
				echo $nb1/$nb2;	

		}catch(Exception $e){
			echo $e->getFile();
		}finally{
			echo 'Fin du programme';
		}	
		



			
		


	?>
	
	

</body>
</html>