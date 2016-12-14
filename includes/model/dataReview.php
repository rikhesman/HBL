<?php
class dataReview extends connection
{
	
public function setRegister($username, $rating, $rtext){
		$sql = "INSERT INTO review (rev_date,username,rating, review)
		VALUES(now(),:username,:rating, :review);"; 		
		$q = $this -> conn -> prepare($sql);
		$q -> bindValue(':username', $username, PDO::PARAM_STR);
		$q -> bindValue(':rating', $rating, PDO::PARAM_STR);		
		$q -> bindValue(':review', $rtext, PDO::PARAM_STR);		
		$q -> execute();
		
		return true;
}
}