<?php 
class reviewManagement
{

//registreren Review
	public static function reviewRegister()	
	{
		$register  	= new dataReview;
		$rating  	= Input::get('rating');
		$rtext  	= Input::get('review');
		
		if (Input::has('rating')){
			$rating = $rating;
		} else {
			echo "Rating mag niet leeg zijn<br>";
		}
			
		if (Input::has('review')){
			$rtext = $rtext;
		} else {
			echo "Review tekst mag niet leeg zijn<br>";
		}
			
			if ($register->setRegister($rating,$rtext)) {
			echo 'Succesvol aangemaakt';
		} else {
			echo "error";}
	}
}
