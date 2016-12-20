<?php 
class imageManagement {
	
	public static function addImage() {
		$img = new dataImage;
		if(input::has('alt')) {			
				$file_name = $_FILES["file"]["name"];
				$file_tmp = $_FILES["file"]["tmp_name"];
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$newFileName = Input::get('alt'). '.' . $ext;	
				move_uploaded_file($_FILES["file"]["tmp_name"], "../foto/Slideshow/" . $newFileName);	
				if ($img -> setImg($newFileName, Input::get('alt'))) {
					$_SESSION['alert'] = true; 
            		$_SESSION['message'] = '<div class="alert alert-success">Afbeelding geupload!</div>';
				}			
		} else {
			$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Vul naam afbeelding in!</div>';
		}
	}
	
	public static function deleteImage() {
		$img = new dataImage;		
		if($img -> deleteImage(Input::get('imgfile'))) {
			unlink('../foto/Slideshow/' . Input::get('imgfile'));
		} else {
			$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Er is iets fout gegaan!</div>';
		}
	}
	
	public static function getImg() {
		$img = new dataImage;
		return $img -> getImg();
	}
}
