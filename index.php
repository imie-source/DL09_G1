<?php
	function recupRole($idUser){
		$hote='127.0.0.1';
		$port='3306';
		$db='gestioncompetence';
		$login='root';
		$mdp='';
		$id='';
		$role='';
		
		$id = -1;
		
		try{

			$pdo=new PDO('mysql:host='.$hote.' ;port='. $port.' ;dbname='.$db,$login,$mdp);
			
		}
		catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}	
		$res=$pdo->query('SELECT id_role_role FROM user_profil WHERE id_user= '.$idUser.';');
		
		while($donnees= $res->fetch(PDO::FETCH_ASSOC)){
			$id =  $donnees['id_role_role'];
		}
	
		$pdo=null;
		$res->closecursor();
		
		return $id;
	}
	
?>		

