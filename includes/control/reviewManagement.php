<?php 
class reviewManagement
{

//registreren Review
	public static function reviewRegister()	
	{
		$register  	= new dataReview;
		$rating  	= Input::get('rating');
		$rtext  	= Input::get('review');
		
		var_dump($rating,$rtext);
		
		if(Input::has('rating') OR Input::has('review')) {
			if (Input::has('rating')){
				$rating = $rating;
				if (Input::has('review')){
					$rtext = $rtext;
					if ($register->setRegister($rating,$rtext)) {
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