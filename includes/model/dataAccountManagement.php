<?php
/*
 * 
 */
 
class dataAccountManagement extends connection {
	
	// Registreren
	public function setRegister($nameP1, $nameP2, $email,$tel,$fName,$lName,$bDate,$school,$class,$dys,$comment) {
		$sql = "INSERT INTO users (namep1, namep2, email, telephone, fname, lname, bdate, school, class, dys, comment) 
		VALUES (:namep1,:namep2, :email, :telephone, :fname, :lname, :bdate, :school, :class, :dys, :comment);"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':namep1', $nameP1, PDO::PARAM_STR);		
		$q -> bindValue(':namep2', $nameP2, PDO::PARAM_STR);		
		$q -> bindValue(':email', $email, PDO::PARAM_STR);
		$q -> bindValue(':telephone', $tel, PDO::PARAM_STR);	
		$q -> bindValue(':fname', $fName, PDO::PARAM_STR);	
		$q -> bindValue(':lname', $lName, PDO::PARAM_STR);	
		$q -> bindValue(':bdate', $bDate, PDO::PARAM_STR);	
		$q -> bindValue(':school', $school, PDO::PARAM_STR);	
		$q -> bindValue(':class', $class, PDO::PARAM_STR);	
		$q -> bindValue(':dys', $dys, PDO::PARAM_STR);	
		$q -> bindValue(':comment', $comment, PDO::PARAM_STR);				
		$q -> execute();
		
		return true;
	}
	
	
}