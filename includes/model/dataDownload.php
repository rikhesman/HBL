<?php
class dataDownload extends connection {
	
	public function setDownload($name,$file) {		
		$sql = "INSERT INTO download (name, file) VALUES (:name,:file)"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':name', $name, PDO::PARAM_STR);		
		$q -> bindValue(':file', $file, PDO::PARAM_STR);
		$q -> execute();		
		return true;		
	}
	
	public function getDownload() {		
		$sql = "SELECT * FROM download";	
		$q = $this -> conn -> prepare($sql);		
		$q -> execute();
		return $q->fetchAll();	
	}
	
	public function deleteDownload($file) {
		$sql = "DELETE FROM download WHERE file = :file";
		$q = $this->conn->prepare($sql);
		$q->bindValue(':file', $file, PDO::PARAM_INT);
		$q->execute();
		return true;
	}
}
