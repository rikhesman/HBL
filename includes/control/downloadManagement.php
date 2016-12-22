<?php
class downloadManagement {
	public static function addDownload() {
		$file = new dataDownload;
		var_dump(input::has('name'));
		if(input::has('name')) {
			$file_size = $_FILES["file"]["size"];			
				if ($file_size != 0) {
					$file_name = $_FILES["file"]["name"];
					$file_tmp = $_FILES["file"]["tmp_name"];
					$file_tmp = $_FILES["file"]["tmp_name"];

					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					$newFileName = input::get('name') . '.' . $ext;
					move_uploaded_file($_FILES["file"]["tmp_name"], "../data/" . $newFileName);
					if($file -> setDownload(input::get('name'),$newFileName)) {
						$_SESSION['alert'] = true; 
            			$_SESSION['message'] = '<div class="alert alert-success">Bestand toegevoegd!</div>';
					}
				} else {
					$_SESSION['alert'] = true; 
            		$_SESSION['message'] = '<div class="alert alert-danger">Bestand heeft geen inhoud!</div>';
				}
		} else {
			$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Vul naam bestand in!</div>';
		}
	}
	
	public static function deleteDownload() {
		$file = new dataDownload;		
		if($file -> deleteDownload(Input::get('file'))) {
			unlink('../data/' . Input::get('file'));
            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-success">Bestand succesvol verwijderd</div>';
		} else {
			$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Er is iets fout gegaan!</div>';
		}
	}
	
	public static function getDownload() {
		$file = new dataDownload;
		return $file -> getDownload();
	}
}
