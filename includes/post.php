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
 
// account 
 if (Input::has('save_user')) accountManagement::register();
 if (Input::has('login')) accountManagement::login();	
 if (Input::has('save_parentship')) accountManagement::parenthood(); 
 
 
 // Review
 if (Input::has('save_review')) reviewManagement::reviewRegister();
 if (Input::has('tocontact')) contactManagement::contactform2();
 
// Slideshow
if (Input::has('submit_image')) imageManagement::addImage();

if (Input::has('deleteImg')) imageManagement::deleteImage();


