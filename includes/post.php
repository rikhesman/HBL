<?php
$_SESSION['alert'] = false; 
$_SESSION['message'] = "";
/*
 * Post alle functies hier
 * 
 * Naam: Ramon Kerpershoek
 * Datum: 6-12-2016
 * 
 */
 
// Account 
 if (Input::has('save_user')) accountManagement::register();
 if (Input::has('login')) accountManagement::login();	
 if (Input::has('save_parentship')) accountManagement::parenthood();
 if (Input::has('save_subject')) accountManagement::setUserSubject();
 if (Input::has('deleteUser')) accountManagement::deleteUser();
 if (Input::has('deleteParent')) accountManagement::deleteParent();
 if (Input::has('deleteVak')) accountManagement::deleteVak();
// Review
 if (Input::has('save_review')) reviewManagement::reviewRegister();
 if (Input::has('tocontact')) contactManagement::contactform2();
 
// Slideshow
 if (Input::has('submit_image')) imageManagement::addImage();
 if (Input::has('deleteImg')) imageManagement::deleteImage();


// Question
 if (Input::has('toquestion')) questionManagement::questionForm();
 
 // Download
 if (Input::has('submit_download')) downloadManagement::addDownload();
 if (Input::has('delete_download')) downloadManagement::deleteDownload();

