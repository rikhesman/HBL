<?php
/*
 * 
 */
 
class dataAccountManagement extends connection {
	
	// Registreren
	public function setRegister($username, $password, $fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date) {
		$sql = "INSERT INTO users (username, password, f_name, insertioon, l_name, rol, email, tel, dys, comment, join_date) 
		VALUES (:username,:password, :f_name, :insertion, :l_name, :rol, :email, :tel, :dys, :comment, :join_date);"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':username', $username, PDO::PARAM_STR);		
		$q -> bindValue(':password', $password, PDO::PARAM_STR);		
		$q -> bindValue(':f_name', $fname, PDO::PARAM_STR);
		$q -> bindValue(':insertion', $insertion, PDO::PARAM_STR);	
		$q -> bindValue(':l_name', $lname, PDO::PARAM_STR);	
		$q -> bindValue(':rol', $rol, PDO::PARAM_STR);	
		$q -> bindValue(':email', $email, PDO::PARAM_STR);	
		$q -> bindValue(':tel', $tel, PDO::PARAM_STR);	
		$q -> bindValue(':dys', $dys, PDO::PARAM_STR);	
		$q -> bindValue(':comment', $comment, PDO::PARAM_STR);	
		$q -> bindValue(':join_date', $date, PDO::PARAM_STR);				
		$q -> execute();
		
		return true;
	}
	
	
}