<?php
class dataReview extends connection
{
	
public static function setRegister($rating, $rtext){
		$sql = "INSERT INTO users (rating, rtext);"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':rating', $rating, PDO::PARAM_STR);		
		$q -> bindValue(':rtext', $rtext, PDO::PARAM_STR);		
		$q -> execute();
		
		return true;
}
}