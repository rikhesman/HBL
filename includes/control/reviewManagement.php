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
						 $_SESSION['alert'] = true; 
             			 $_SESSION['message'] = '<div class="alert alert-success form-group">Review is aangemaakt!</div>';
					} else {
						$_SESSION['alert'] = true; 
             			$_SESSION['message'] = '<div class="alert alert-danger form-group">Database error!</div>';
					}
				} else {
					$_SESSION['alert'] = true; 
             		$_SESSION['message'] = '<div class="alert alert-danger form-group">Review tekst mag niet leeg zijn!</div>';
				}
			} else {
				$_SESSION['alert'] = true; 
             	$_SESSION['message'] = '<div class="alert alert-danger form-group">Er moet een rating gegeven worden</div>';
			}		
		} else {
			$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger form-group">Alle velden moeten worden ingevuld!</div>';
		}
		
	}
	public static function getReview(){
		$getReview = new dataReview;
		return $getReview->getReview();
	}
}