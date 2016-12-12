<?php

/*
 * Post alle functies hier
 * 
 * Naam: Ramon Kerpershoek
 * Datum: 6-12-2016
 * 
 */
 
 if (Input::has('save')) accountManagement::register();
 if (Input::has('login')) accountManagement::login();	
 	
 
 

