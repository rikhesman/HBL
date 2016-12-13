<?php 
class reviewManagement
{

//registreren Review
	public static function reviewRegister()	
	{
		$register  	= new dataReview;
		$rating  	= Input::get('rating');
		$rtext  	= Input::get('review');
		
		
		$username = $_SESSION['user']['username'];
		
		if(Input::has('rating') OR Input::has('review')) {
			if (Input::has('rating')){
				$rating = $rating;
				if (Input::has('review')){
					$rtext = $rtext;
					if ($register->setRegister($username,$rating,$rtext)) {
						echo 'Succesvol aangemaakt';
					} else {
						echo "error";
					}
				} else {
					echo "Review tekst mag niet leeg zijn<br>";
				}
			} else {
				echo "Rating mag niet leeg zijn<br>";
			}		
		} else {
			echo 'vul velden in.';
		}
		
	}
}