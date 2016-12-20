<?php
class dataImage extends connection {
	
	public function setImg($file, $alt) {
		$sql = "INSERT INTO image (file, alt) VALUES (:file,:alt)"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':file', $file, PDO::PARAM_STR);		
		$q -> bindValue(':alt', $alt, PDO::PARAM_STR);
		$q -> execute();		
		return true;		
	}
	
	
	
}