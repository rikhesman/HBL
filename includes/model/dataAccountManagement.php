<?php
/*
 * 
 */
 
class dataAccountManagement extends connection {
	
	// Registreren
	public function setRegister($username, $password, $fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date,$class,$school) {
		$sql = "INSERT INTO users (username, password, f_name, insertion, l_name, rol, email, tel, dys, comment, join_date, class, school) 
		VALUES (:username,:password, :f_name, :insertion, :l_name, :rol, :email, :tel, :dys, :comment, :join_date ,:class, :school)";
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':username', $username, PDO::CASE_LOWER);		
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
        $q -> bindValue(':class', $class, PDO::PARAM_STR);
        $q -> bindValue(':school', $school, PDO::PARAM_STR);
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
	
	public function Subject(){
		$sql = "SELECT * FROM subject";
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
	
	public function getInfo(){
		$sql = "SELECT * from users WHERE rol = 'Ouder' OR rol = 'Kind' ORDER BY l_name";
		$q = $this->conn->prepare($sql);
		$q -> execute();
		return $q->fetchAll();
	}
    
    public function kindInfo(){
		$sql = "SELECT * from parent ORDER BY 'user_child'";
		$q = $this->conn->prepare($sql);
		$q -> execute();
		return $q->fetchAll();
	}
    
      public function vakInfo(){
		$sql = "SELECT * from user_subject";
		$q = $this->conn->prepare($sql);
		$q -> execute();
		return $q->fetchAll();
	}
	
	public function setUserSubject($username, $subject) {
		$sql = "INSERT INTO user_subject (username, subject)
		VALUES (:username, :subject)";
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':username', $username, PDO::PARAM_STR);
		$q -> bindValue(':subject', $subject, PDO::PARAM_STR);
		$q -> execute();
		return true;
	}

	public function delUser($user) {
		$sql = "DELETE FROM users WHERE username = :username";
		$q = $this->conn->prepare($sql);
		$q->bindValue(':username', $user, PDO::PARAM_STR);
		$q->execute();
		return true;
	}
    
	public function delParent($child,$parent) {
		$sql = "DELETE FROM parent WHERE user_child = :user_child AND user_parent = :user_parent";
		$q = $this->conn->prepare($sql);
        $q->bindValue(':user_child', $child, PDO::PARAM_STR);
        $q->bindValue(':user_parent', $parent, PDO::PARAM_STR);
		$q->execute();
		return true;
	}
    
    public function delVak($username,$subject) {
		$sql = "DELETE FROM user_subject WHERE username = :username AND subject = :subject";
		$q = $this->conn->prepare($sql);
        $q->bindValue(':username', $username, PDO::PARAM_STR);
        $q->bindValue(':subject', $subject, PDO::PARAM_STR);
		$q->execute();
		return true;
	}
}