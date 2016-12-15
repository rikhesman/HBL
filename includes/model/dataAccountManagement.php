<?php
/*
 * 
 */
 
class dataAccountManagement extends connection {
	
	// Registreren
	public function setRegister($username, $password, $fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date) {
		$sql = "INSERT INTO users (username, password, f_name, insertion, l_name, rol, email, tel, dys, comment, join_date) 
		VALUES (:username,:password, :f_name, :insertion, :l_name, :rol, :email, :tel, :dys, :comment, :join_date)"; 		
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
	
	public function login($username) {
		$sql = "SELECT * FROM users WHERE username = :username "; 		
		$q = $this -> conn -> prepare($sql);
		$q -> BindParam(':username',$username);		
		$q -> execute();		
		$row = $q->fetchAll();
		
		if ($row == true){
			return $row[0]['password'];
		}else{
			return false;
		}
	}
	
    public function getRole($username) {
		$sql = "SELECT rol FROM users WHERE username = :username";	
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':username', $username, PDO::PARAM_STR);
		$q -> execute();
		return $q->fetchAll();
	}
	
	public function getParents(){
		$sql = "SELECT * FROM users WHERE rol = 'Ouder' ";
		$q = $this->conn->prepare($sql);
		$q -> execute();
		return $q->fetchAll();
	}
	
	public function getChild(){
		$sql = "SELECT * FROM users WHERE rol = 'Kind' ";
		$q = $this->conn->prepare($sql);
		$q -> execute();
		return $q->fetchAll();
	}
	
	public function setParenthood($child, $parent) {
		$sql = "INSERT INTO parent (user_child, user_parent)
		VALUES (:child, :parent)";
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':child', $child, PDO::PARAM_STR);
		$q -> bindValue(':parent', $parent, PDO::PARAM_STR);
		$q -> execute();	
		return true;
	}
}
